<?php

namespace App\Models;

use App\Listeners\SendEmailListener;
use App\Mail\NotifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Mail;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parentComment() {
        return $this->hasMany(Comment::class);
    }

    public function childrenComment() {
        return $this->belongsTo(Comment::class);
    }
}
