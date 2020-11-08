<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function posts() {
        $this->hasOne('\App\Models\Post');
    }

    public function parentComment() {
        $this->hasMany('\App\Models\Comment');
    }

    public function childrenComment() {
        $this->hasOne('\App\Models\Comment');
    }
}
