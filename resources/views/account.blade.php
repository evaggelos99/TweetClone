@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3 p-5 div-picture">
                <div>
                    @if($user->account->image !=null)
                        <div>
                            <img src="/storage/{{$user->account->image}}"
                                 width="150" height="150" class="rounded-circle">
                        </div>
                    @else
                        <div>
                            <img src="{{asset('images/No_image_available.svg')}}"
                                 width="150" height="150" class="rounded-circle">
                        </div>
                    @endif
                </div>

            </div>
            <div style="padding-left: 50px">
                <div style="padding-bottom: 15px" class="items-center">
                    <b style="font-size: 18px">{{$user->name}}</b>
                    @if(Auth::user()-> id != $user->id)
                        <follow-button follows="{{$follows}}" user-id="{{$user->id}}" style="float: right;"></follow-button>
                    @endif
                </div>

                <div style="padding-bottom: 15px">
                    <strong style="color: dimgrey; font-size: 16px">{{$user->username}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">{{$user->account->biography ?? 'No biography'}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">{{$user->account->location ?? 'No location'}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">Member
                        since: {{$user->created_at->format('d-m-Y')}}</strong>
                </div>
                <div class="flex-column">
                    <strong style="color: darkgrey;padding-right: 25px">Followers: {{$followersCounter}}</strong>
                    <strong style="color: darkgrey">Follows: {{$followingCounter}}</strong>
                </div>
            </div>

        </div>
        <ul>
            @if(count($posts)==0)
                <div style="text-align: center">
                    <strong class="center-block" style="border-top: 10px gray; justify-content: center; align-items: center">No tweets yet</strong>
                </div>
            @endif
        @foreach($posts as $post)

                    <div style="padding: 15px">
                        <div class="container"
                             style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;width: 100%; height: 100%">
                            <div onclick="location.href='{{route('tweet.show', $post->id)}}'" class="well">

                                <div class="media">
                                    @if($user->account->image !=null)
                                    <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">

                                            <div class="pt-3">
                                                <img src="/storage/{{$user->account->image}}"
                                                     width="75" height="75" class="rounded-circle">
                                            </div>

                                    </a>
                                    @else
                                        <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">
                                        <div class="pt-3">
                                            <img src="{{asset('images/No_image_available.svg')}}"
                                                 width="75" height="75" class="rounded-circle">
                                        </div>
                                        </a>
                                    @endif
                                    <div class="media-body" style="padding-top: 10px">
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
                                        <a class="pull-left" style="padding: 15px; text-decoration: none; color: black" href="/account/{{$post->user_id}}">
                                            <h6 class="media-heading"
                                                style="line-height: 3em">Made by: <strong>{{$post->user->username}}</strong></h6>
                                        </a>
                                        <p style="padding-left: 20px">{{$post->content}}</p>
                                        @if($post->image !=null)
                                            <div>
                                                <a href="/storage/{{$post->image}}"><img src="/storage/{{$post->image}}"
                                                     style="max-width:300px;max-height:300px;height: auto; width: auto"></a>
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

                    </div>
            @endforeach
        </ul>

    </div>

    <div style="padding: 10px"></div>
    <div class="pagination" style="justify-content: center; align-items: center">
        <div class="pagination" style="float: end">
            <div class="center-block">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
