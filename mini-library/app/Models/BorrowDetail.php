<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowDetail extends Model
{
    use HasFactory;

    public function member() {
        return $this->belongsTo('App\Models\Member\Member');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function book() {
        return $this->belongsTo('App\Models\Book\Book');
    }
}
