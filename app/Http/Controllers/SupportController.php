<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        return view('support.support');
    }

    public function request_support(Request $request){
        $request->validate([
            'type_of_support' => 'required',
            'branch' => 'required',
        ]);

        user()->supports()->create([
            'type_of_support' => $request->type_of_support,
            'branch' => $request->type_of_support,
        ]);

        return redirect()->back()->with([
            'success' => 'your request has been sent success'
        ]);
    }

    public function manage_support_requests(){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $supports = Support::all();
        return view('support.manage',compact('supports'));
    }

    public function accept(Support $support){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $support->update([
            'active' => 1
        ]);

        return redirect()->back()->with([
            'success' => 'accepted successfully'
        ]);
    }

    public function delete(Support $support){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $support->delete();

        return redirect()->back()->with([
            'success' => 'deleted successfully'
        ]);
    }
}
