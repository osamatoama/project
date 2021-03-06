<?php

namespace App\Http\Controllers;

use App\Models\ResearchGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $type;
    public function __construct(){
        $this->type = request()->type;
    }
    public function index()
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $type = $this->type;
        $users = User::where('type',$type)->where('type' ,'!=' ,'admin')->get();
        $researchGroups = ResearchGroup::get();
        return view('faculty.index',compact('users','type','researchGroups'));
    }

    public function create()
    {
        $type = $this->type;
        $researchGroups = ResearchGroup::get();

        return view('faculty.create',compact('type','researchGroups'));
    }

    public function store(Request $request)
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $this->validate($request, [
//            'name'  => 'required',
            'email'  => 'required|unique:users',
            'password' => ['nullable','string', 'min:6'],
        ]);
        $arr = array_merge($request->all(),[
            'password' => bcrypt($request->password)
        ]);
        $user = User::create($arr);

        if($user->type == 'student') {
            return redirect()->back()->with([
                'success' => 'created'
            ]);
        }else{
            return redirect()->back()->with([
                'success' => 'Faculty details have been added Successfully'
            ]);
        }

    }

    public function edit(User $user)
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $type = $this->type;
        $researchGroups = ResearchGroup::get();

        return view('faculty.edit', compact('user','type','researchGroups'));
    }

    public function update(Request $request, User $user)
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $request->validate([
//            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,'.user()->id],
            'password' => ['nullable','string', 'min:6'],
        ]);
        $arr = array_merge($request->all(),[
            'password' => bcrypt($request->password)
        ]);

        $user->update($arr);

        if($request->password) {
            user()->update([
                'password' => $request->password,
            ]);
        }
        $type = $this->type;

        if($type == 'student') {
            return redirect(route('user.index').'?type='.$type)->with([
                'success' => 'Information Updated Successfully'
            ]);
        }else{
            return redirect(route('user.index').'?type='.$type)->with([
                'success' => 'Faculty Information Updated Successfully'
            ]);
        }

    }

    public function destroy(User $user)
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $type = $this->type ?? request()->type;
        $user->delete();
        return redirect(route('user.index').'?type='.$type)->with([
            'success' => 'Deleted'
        ]);
    }
}
