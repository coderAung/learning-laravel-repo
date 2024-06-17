<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function address() {
        return $this->belongsTo('App\Models\Address\Address');
    }

    public function history() {
        return $this->hasMany('App\Models\BorrowDetail');
    }
}
