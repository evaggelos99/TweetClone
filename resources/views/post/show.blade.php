@extends('layouts.app')

@section('content')

    <div class="container" style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;width: 100%; height: 100%">
        <div class="well">
            <div class="media">
                <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">
                @if($post->user->account->image !=null)
                        <div>
                            <img class="media-object rounded-circle" height="50" width="50" src="/storage/{{$post->user->account->image}}">
                        </div>
                    @else
                        <div>
                            <img class="media-object rounded-circle" height="50" width="50" src="{{asset('images/No_image_available.svg')}}">
                        </div>
                    @endif
                </a>

                <div class="media-body">
                    <div style="float: right; padding: 5px">

                        @if(Auth::user()-> id == $post->user_id)
                            <form action="{{route('tweet.destroy', $post->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" style="border-radius: 10px"
                                        title="Delete Tweet"><u>X</u></button>
                                @endif
                            </form>
                            <div style="padding-bottom: 10px"></div>
                        @if(Auth::user()-> id == $post->user_id)
                            <form action="{{route('tweet.edit', $post->id)}}" method="get">
                                @csrf
                                <button class="btn btn-warning" style="border-radius: 10px" title="Edit Tweet"><u>E</u>dit</button>
                                @endif
                            </form>
                                <div style="padding-bottom: 10px"></div>
                            <form action="{{route('repost.store', $post->id)}}" method="post">
                                @csrf
                                <button class="btn btn-info" style="border-radius: 10px; background-color: rgb(0,172,230)" title="Repost this">Retweet</button>
                            </form>

                    </div>
                    <a class="pull-left" style="padding: 15px; text-decoration: none; color: black" href="/account/{{$post->user_id}}">
                    <h6 class="media-heading" style="line-height: 3em"> Made by: <strong>{{$post -> user-> username}}</strong></h6>
                    </a>
                    <p>{{$post->content}}</p>
                    @if($post->image !=null)
                        <div>
                            <a href="/storage/{{$post->image}}">
                                <img src="/storage/{{$post->image}}" style="max-width:500px;max-height:500px;height: auto; width: auto" >
                            </a>
                        </div>
                    @endif

                    <div class="flex-column" style="padding-top: 15px">
                        @if($post->tag != null)
                            <i style="font-size: 12px; padding-right: 4px">Tags: </i>
                        @endif
                        @foreach( (explode('#',$post->tag)) as $tag)
                            <a href="{{route('tag.index', $tag) }}" style="text-decoration: none; color: black">
                                <b style="font-size: 12px; padding-right: 2px">{{$tag}}</b>
                            </a>
                        @endforeach
                        <i style="font-size: 12px; padding-right: 4px">Comments: {{count($post->comments)}}</i>
                        <i style="font-size: 12px">Created: {{$post->created_at->format('d-m-Y')}}</i>
                        @if($post->created_at != $post->updated_at)
                            <i style="font-size: 12px; padding-right: 4px">(Edited)</i>
                        @endif
                            @if($post->repost)
                                <a href="{{route('tweet.show', $post->original_post)}}" style="color: black;text-decoration: none;font-size: 12px; padding-right: 4px"><strong>(Retweeted)</strong></a>
                            @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div style="padding: 20px"></div>
    {{-- Post Comments --}}
    <div class="card mt-4">
        <h5 class="card-header">Comments <span class="comment-count float-right badge badge-info">{{ count($post->comments) }}</span></h5>
        <div class="card-body">
            {{-- Add Comment --}}
            <div class="add-comment mb-3">
                @csrf
                <textarea class="form-control comment" placeholder="Enter Comment"></textarea>
                <button data-post="{{ $post->id }}" class="btn btn-dark btn-sm mt-2 save-comment">Submit</button>
            </div>
            <hr/>
            {{-- List Start --}}
            <div class="comments">
                @if(count($post->comments)>0)
                    @foreach($post->comments as $comment)
                        <blockquote class="blockquote">
                            <strong style="font-size: 15px" class="mb-0">Made by: {{ $comment->user->username }}</strong>
                            <div style="padding: 8px"></div>
                            <small class="mb-0">{{ $comment->context }}</small>
                            @if($comment->created_at != $comment->updated_at)
                                <div style="padding: 8px"></div>
                                <small style="font-size: 12px; padding-right: 4px">(Edited)</small>
                            @endif
                            <div style="padding: 8px"></div>
                            @if($comment->user == auth()->user())
                                <form action="{{route('delete_comment', $comment->id)}}" method="post">
                                    <button class="btn btn-danger">Delete</button>
                                    @method('DELETE')
                                    @csrf
                                </form>
                                @endif
                            <div style="padding: 8px"></div>
                            @if($comment->user == auth()->user())
                                <form action="{{route('comment.edit', $comment->id)}}" method="get">
                                    <button class="btn btn-warning">Update</button>
                                    @csrf
                                </form>
                            @endif
                        </blockquote>
                        <hr/>
                    @endforeach
                @else
                    <p class="no-comments">No Comments Yet</p>
                @endif
            </div>
        </div>
    </div>
    {{-- ## End Post Comments --}}

@endsection
