@extends('layouts.app')

@section('content')

    <div class="container" style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;
  width: 50%;">
        <div class="well">
            <div class="media">
                <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">
                @if($post->user->image !=null)
                        <div>
                            <img class="media-object rounded-circle" height="50" width="50" src="/storage/{{$post->user->image}}">
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
                                @if(Auth::user()->id != $post->user_id)
                                <button style="border-radius: 10px; background-color: rgb(0,172,243)" class="btn btn-info"><u>F</u>ollow</button>
                            @endif
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
                        <i style="font-size: 12px; padding-right: 4px">Comments</i>
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
@endsection
