@extends('layouts.app')

@section('title','All posts')

@section('content')

    <div class="container" style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;
  width: 50%;">
        <div class="well">
            <div class="media">
                <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">
                    <img class="media-object rounded-circle" height="50" width="50" src="https://pbs.twimg.com/profile_images/859982100904148992/hv5soju7_400x400.jpg">
                </a>

                <div class="media-body">
                    <h6 class="media-heading" style="line-height: 3em">{{$post -> user-> username}}</h6>
                    <p>{{$post->content}}</p>
                    @if($post->image !=null)
                        <div>
                            <img src="/storage/{{$post->image}}" style="max-width:500px;max-height:500px;height: auto; width: auto" >
                        </div>
                    @endif

                    <div class="flex-column" style="padding-top: 15px">
                        <i style="font-size: 12px; padding-right: 4px">Comments</i>
                        <i style="font-size: 12px; padding-right: 4px">Reposts</i>
                        <i style="font-size: 12px; padding-right: 4px">Likes: {{$post->likes ?? 0}}</i>
                        <i style="font-size: 12px">Created: {{$post->created_at->format('d-m-Y')}}</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
