<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($id) {
        $user= User::findOrFail($id);
        $currentUser = auth()->user();
        return $currentUser->following()->toggle($user->account);
    }
}
