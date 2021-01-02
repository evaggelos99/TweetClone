@extends('layouts.app')

@section('content')

        @foreach ($posts as $post)
            <div style="padding: 10px"></div>
                <div class="container" style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;
  width: 100%; height: 100%">
                    <div onclick="location.href='{{route('tweet.show', $post->id)}}'" class="well">
                        <div class="media">
                            <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">
                                @if($post->user->account->image !=null)
                                    <div>
                                        <img class="media-object rounded-circle" height="75" width="75" src="/storage/{{$post->user->account->image}}">
                                    </div>
                                @else
                                    <div>
                                        <img src="{{asset('images/No_image_available.svg')}}"
                                             width="75" height="75" class="rounded-circle">
                                    </div>
                                @endif
                            </a>

                            <div class="media-body">

                                <div style="float: right; padding: 5px">
                                </div>
                                <a class="pull-left" style="padding: 15px; color: black; text-decoration: none" href="/account/{{$post->user_id}}">
                                    <h6 class="media-heading" style="line-height: 3em">{{$post -> user-> username}}</h6>
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
                                    <i style="font-size: 12px; padding-right: 4px">Tags: </i>
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
                @endforeach
        <div style="padding: 10px"></div>
        <div class="pagination" style="justify-content: center; align-items: center">
            <div class="pagination" style="float: end">
                <div class="center-block">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
@endsection
