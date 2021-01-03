<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public function following() {
        return $this->belongsToMany(User::class, 'follow', 'follower_id', 'following_id');
    }

    public function follower() {
        return $this->belongsToMany(User::class, 'followers', 'following_id', 'follower_id');
    }
}
