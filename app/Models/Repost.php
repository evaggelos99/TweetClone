<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repost extends Model
{
    use HasFactory;

    public function posts() {
        $this ->hasOne('\App\Models\Post');
    }

    public function childrenRepost() {
        $this->hasOne('\App\Models\Repost');
    }

    public function parentRepost() {
        $this->hasMany('\App\Models\Repost');
    }
}
