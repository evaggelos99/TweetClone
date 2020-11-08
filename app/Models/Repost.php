<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repost extends Model
{
    use HasFactory;

    public function post() {
        return $this ->belongsTo(Post::class);
    }

    public function childrenRepost() {
        return $this->belongsTo(Repost::class);
    }

    public function parentRepost() {
        return $this->hasMany(Repost::class);
    }
}
