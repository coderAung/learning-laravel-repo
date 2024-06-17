<?php

namespace App\Services;

use App\Models\Member\Member;

class MemberService {

    public static function findByEmail(string $email) {
        $member = Member::where("email", $email)->paginate();
        return $member;
    }
}