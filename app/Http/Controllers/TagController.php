<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class TagController extends Controller
{

    public function index() {
        Paginator::useBootstrap();
        $tag=request('tag');
        $ting = Tag::where('context', $tag)->firstOrFail();
        $postsWithAllTags=$ting->with('posts')->get();
        foreach($postsWithAllTags as $tagPost) {
            if (request('tag')==$tagPost['context']) {

                $posts = $tagPost['posts']->sortByDesc('created_at');
                $collection = collect($posts)->paginate(5);
                return view('post.index', [
                    'posts'=>$collection
                ]);
            }
        }
        return redirect('account/'. auth()->user()->id);

    }


}
