<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class RepostController extends Controller
{
    public function store($id) {

        $post = Post::findOrFail($id);

        $newRepost = auth() -> user() -> posts() ->create([
            'repost'=> 1,
            'content'=> $post->content,
            'image' => $post->image ?? null,
            'likes' => $post->likes ?? null,
            'tag' => $post->tag ?? null,
            'original_post'=> $id,
        ]);

        if ($post->tag!=null) {
            $tagIds = [];
            $tagNames = explode('#', $post->tag);
            foreach($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['context' => $tagName]);
                if ($tag) {
                    $tagIds[]= $tag-> id;
                }
            }
            $newRepost->tags()->sync($tagIds);
        }

        $newRepost->original_post=$id;
        $newRepost->save();

        return redirect('/account/'. auth()->user()->id);
    }
}
