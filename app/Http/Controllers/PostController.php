<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'content' => 'required',
            'likes'=> 'nullable',
            'image' => ['nullable', 'image'],
            'tag' =>['nullable'],
        ]);

        if (request('image')!=null) {
            $filepath = request('image')->store('uploads', 'public');
        }

        auth()-> user()->posts()->create([
            'content'=> $data['content'],
            'image' => $filepath ?? null,
            'likes' => $data['likes'] ?? null,
            'tag' =>$data['tag'] ?? null,
        ]);

        if (request('tag')!=null) {
            //auth()-> user()->posts()->tags()->sync($request->input('tag'));
            $post = Auth()->user()->posts();
            $post->tags()->sync(request('tag'));
        }

        return redirect('/tweet/'. auth()->user()->id);
        //$idOfPost = request('id');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', [
            'post'=>$post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if (request('content')!='') {
            $post->content = request('content');
        }

        if (request('tag')!='') {
            $post->tag = request('tag');
        }

        if (request('image')!='') {
            $filepath = request('image')->store('uploads', 'public');
            $post->image = $filepath;
        }

        $post->save();
        return redirect('/tweet/'. $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/account/'. auth()->user()->id);
    }
}
