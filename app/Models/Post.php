<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasOne('\App\Models\User');
    }


    public function reports() {
        return $this->hasMany('\App\Models\Repost');
    }

    public function comments() {
        return $this->hasMany('\App\Models\Comment');
    }

    public function tags() {
        return $this->hasMany('\App\Models\Tag');
    }
}
