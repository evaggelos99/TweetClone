<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'biography',
        'location',
        'image',
    ];

    public function followers() {
        return $this-> belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
