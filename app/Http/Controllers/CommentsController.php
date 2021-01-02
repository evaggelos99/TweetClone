<?php

namespace App\Http\Controllers;

use App\Mail\NotifyEmail;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{

    public function save_comment(Request $request){
        return $this->store($request);
    }

    public function edit($id){
        $comment = Comment::findOrFail($id);
        return view('comment.edit', ['comment'=>$comment]);
    }

    public function update($id){
        $comment = Comment::findOrFail($id);
        $post = $comment->post;
        $comment->context = request()->comment;
        $comment->update();

        $array = $post->tags;
        $newTags =[];
        foreach ($array as $tag) {
            $newTags[] = $tag->context;
        }

        return view('post.show', [
            'post'=>$post,
            'newTags'=>$newTags,
        ]);
    }

    public function delete_comment($id){
        $comment = Comment::findOrFail($id);
        $post = $comment->post;
        $comment->delete();
        $array = $post->tags;
        $newTags =[];
        foreach ($array as $tag) {
            $newTags[] = $tag->context;
        }

        return view('post.show', [
            'post'=>$post,
            'newTags'=>$newTags,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = new Comment;
        $data->post_id = $request->post;
        $data->context = $request->comment;
        $data->likes = 0;
        $data->user_id = auth()->user()->id;

        $data->save();
        $post=Post::find($data->post_id);
        Mail::to($post->user->email) -> send(new NotifyEmail($data));
        return response()->json([
            'bool' => true,
            'id' => $data->id,
        ]);
    }


}
