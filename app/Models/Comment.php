<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function posts() {
        $this->hasOne('\App\Models\Post');
    }

    public function user() {
        $this->hasOne('\App\Models\User');
    }

    public function parentComment() {
        $this->hasMany('\App\Models\Comment');
    }

    public function childrenComment() {
        $this->belongsTo('\App\Models\Comment');
    }
}
