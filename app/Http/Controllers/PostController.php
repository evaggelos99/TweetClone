<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use function Sodium\add;

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
        Paginator::useBootstrap();
        $users= auth() -> user()->following()-> pluck('accounts.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->paginate(5);

        return view('post.index', [
            'posts'=>$posts,
        ]);
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

        $post=auth()-> user()->posts()->create([
            'repost'=> 0,
            'content'=> $data['content'],
            'image' => $filepath ?? null,
            'likes' => $data['likes'] ?? null,
            'tag' =>$data['tag'] ?? null,
        ]);

        if (request('tag')!=null) {
            $tagIds = [];
            $tagNames = explode('#', request('tag'));
            foreach($tagNames as $tagName) {
                $tag = Tag::firstOrCreate(['context' => $tagName]);
                if ($tag) {
                    $tagIds[]= $tag-> id;
                }
            }
            $post->tags()->sync($tagIds);

        }

        return redirect('/account/'. auth()->user()->id);
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
                $tagIds = [];
                $tagNames = explode('#', request('tag'));
                foreach($tagNames as $tagName) {
                    $tag = Tag::firstOrCreate(['context' => $tagName]);
                    if ($tag) {
                        $tagIds[]= $tag-> id;
                    }
                }
                $post->tags()->sync($tagIds);
                $post->tag=request('tag');
            }

        if (request('image')!='') {
            $filepath = request('image')->store('uploads', 'public');
            $post->image = $filepath;
        }

        $post->update();
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
