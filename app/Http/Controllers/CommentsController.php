<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store() {
        echo 'dsa';
    }

    public function createComment($id) {
        $post= Post::findOrFail($id);
        return view('comment.create', [
            'post_id' => $post->id,
        ]);
    }


}
