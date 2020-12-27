@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3 p-5 div-picture">
                <div>
                    @if($user->image !=null)
                        <div>
                            <img src="/storage/{{$user->image}}"
                                 width="150" height="150" class="rounded-circle">
                        </div>
                    @endif
                </div>

            </div>
            <div style="padding-left: 50px">
                <div style="padding-bottom: 15px">
                    <b style="font-size: 18px">{{$user->name}}</b>
                    @if(Auth::user()->id != $user->id)
                    <button style="border-radius: 10px; background-color: rgb(0,172,243)" class="btn btn-info"><u>F</u>ollow</button>
                @endif
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: dimgrey; font-size: 16px">{{$user->username}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">{{$user->biography ?? 'No biography'}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">{{$user->location ?? 'No location'}}</strong>
                </div>
                <div style="padding-bottom: 15px">
                    <strong style="color: grey; font-size: 15px">Member
                        since: {{$user->created_at->format('d-m-Y')}}</strong>
                </div>
                <div class="flex-column">
                    <strong style="color: darkgrey;padding-right: 25px">Following:</strong>
                    <strong style="color: darkgrey">Followers:</strong>
                </div>
            </div>

        </div>
        <ul>
        @foreach($user->posts as $post)

                    <div style="padding: 15px">
                        <div class="container"
                             style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;width: 50%;">
                            <div onclick="location.href='{{route('tweet.show', $post->id)}}'" class="well">

                                <div class="media">
                                    @if($user->image !=null)
                                    <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">

                                            <div>
                                                <img src="/storage/{{$user->image}}"
                                                     width="50" height="50" class="rounded-circle">
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

                                                    <div style="padding-bottom: 10px"></div>
                                            <!-- FOLLOW BUTTON ADD FUNCTIONALITY -->
                                                @if(Auth::user()->id != $post->user_id)
                                            <button style="border-radius: 10px; background-color: rgb(0,172,243)" class="btn btn-info"><u>F</u>ollow</button>
                                                @endif

                                        </div>
                                        <strong class="media-heading"
                                            style="line-height: 3em">{{$post -> user-> username}}</strong>
                                        <p>{{$post->content}}</p>
                                        @if($post->image !=null)
                                            <div>
                                                <a href="/storage/{{$post->image}}"><img src="/storage/{{$post->image}}"
                                                     style="max-width:300px;max-height:300px;height: auto; width: auto"></a>
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

                    </div>
            @endforeach
        </ul>

    </div>

@endsection
