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

                    </div>
                    <h6 class="media-heading" style="line-height: 3em">{{$post -> user-> username}}</h6>
                    <p>{{$post->content}}</p>
                    @if($post->image !=null)
                        <div>
                            <a href="/storage/{{$post->image}}">
                                <img src="/storage/{{$post->image}}" style="max-width:500px;max-height:500px;height: auto; width: auto" >
                            </a>
                        </div>
                    @endif

                    <div class="flex-column" style="padding-top: 15px">
                        <i style="font-size: 12px; padding-right: 4px">Tags: </i>
                        @foreach($newTags as $tag)
                            <a href="{{route('tag.index', $tag) }}" style="text-decoration: none; color: black">
                                <b style="font-size: 12px; padding-right: 2px">{{$tag}}</b>
                            </a>
                        @endforeach
                        <i style="font-size: 12px; padding-right: 4px">Comments: {{count($post->comments)}}</i>
                        <i style="font-size: 12px; padding-right: 4px">Reposts</i>
                        <i style="font-size: 12px; padding-right: 4px">Likes: {{$post->likes ?? 0}}</i>
                        <i style="font-size: 12px">Created: {{$post->created_at->format('d-m-Y')}}</i>
                        @if($post->created_at != $post->updated_at)
                        <i style="font-size: 12px; padding-right: 4px">(Edited)</i>
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
                    <button data-post="{{ $post->id }}" class="btn btn-dark btn-sm mt-2 save-comment">Post Comment</button>
                </div>
                <hr/>
                {{-- List Start --}}
                <div class="comments">
                    @if(count($post->comments)>0)
                        @foreach($post->comments as $comment)
                            <blockquote class="blockquote">
                                <div class="container-fluid">
                                    <strong class="mb-0" style="font-size: 15px; color: dimgrey">Made by: {{ $comment->user->username}}</strong>
                                    <br>
                                    <small class="mb-0">{{ $comment->context }}</small>
                                    <br>
                                    <button onclick="deleteComment({{$comment->id}})" class="btn btn-danger">Delete comment</button>
                                    <!--<button href="{}">hey</button>-->
                                </div>
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
