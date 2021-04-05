<?php

namespace App\Http\Controllers;

use App\Models\JoinReserchGroup;
use App\Models\ResearchGroup;
use Illuminate\Http\Request;

class JoinSearchGroupController extends Controller
{
    public function index(){
        $research_groups = ResearchGroup::get();

        return view('join_search_group',compact('research_groups'));
    }

    public function members(ResearchGroup $researchGroup){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $members = $researchGroup->members;

        return view('research_group.members',compact('members'));
    }

    public function join(Request $request){
        $request->validate([
            'research_group_id' => 'required',
        ]);
        user()->joinedResearchGroup()->sync([$request->research_group_id]);

        return redirect()->back()->with([
            'success' => 'your request has been sent success'
        ]);
    }

    public function accept(JoinReserchGroup $joinReserchGroup){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $joinReserchGroup->update([
            'active' => 1
        ]);

        return redirect()->back()->with([
            'success' => 'accepted successfully'
        ]);
    }

    public function delete(JoinReserchGroup $joinReserchGroup){
        if (user()->type != 'admin' && user()->type != 'faculty') {
            abort(404);
        }
        $joinReserchGroup->delete();

        return redirect()->back()->with([
            'success' => 'deleted successfully'
        ]);
    }

}
