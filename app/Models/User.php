<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function post() {
        return $this->hasMany(Post::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }

    public function repost(){
        return $this->hasMany(Repost::class);
    }
}
