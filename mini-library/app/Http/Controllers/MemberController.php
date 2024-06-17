<?php

namespace App\Http\Controllers;

use App\Models\Member\Member;
use App\Services\MemberService;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function showAllMembers(Request $request) {
        if ($request->get('email')) {
            $members = MemberService::findByEmail($request->get('email'));
        } else {
            $members = Member::paginate(8);
        }
        return view('members.members', ['members' => $members]);
    }

    public function showProfile($id) {
        $member = Member::find($id);
        return view('members.profile', ['member' => $member]);
    }

    public function showHistory($id) {
        $member = Member::find($id);
        $history = $member->history;
        $name = $member->name;
        return view('members.profile', ['history' => $history, 'name' => $name]);
    }
}
