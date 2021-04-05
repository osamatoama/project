<?php

namespace App\Http\Controllers;

use App\Models\ResearchGroup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResearchGroupController extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $research_groups = ResearchGroup::get();
        return view('research_group.index',compact('research_groups'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $this->validate($request, [
            'name'  => 'required',
            'description'  => 'required',
        ]);

        ResearchGroup::create($request->all());

        return redirect()->back()->with([
            'success' => 'added'
        ]);
    }

    public function edit(ResearchGroup $researchGroup)
    {
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        return view('research_group.edit', compact('researchGroup'));
    }

    public function update(Request $request, ResearchGroup $researchGroup)
    {
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $request->validate([
            'name'  => 'required',
            'description'  => 'required',
        ]);

        $researchGroup->update($request->all());

        return redirect(route('research-group.index'))->with([
            'success' => 'updated'
        ]);
    }

    public function destroy(ResearchGroup $researchGroup)
    {
        if (user()->type != 'admin') {
            abort(404);
        }
        $researchGroup->delete();

        return redirect(route('research-group.index'))->with([
            'success' => 'updated'
        ]);
    }
}
