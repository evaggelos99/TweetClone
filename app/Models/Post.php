<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function repost() {
        return $this->hasMany(Repost::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function tag() {
        return $this->hasMany(Tag::class);
    }
}
