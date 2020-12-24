@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3 p-5 div-picture">
                <div>
                    @if($user->profile_photo_path !=null)
                        <div>
                            <img src="/storage/{{$user->profile_photo_path}}"
                                 width="150" height="150" class="rounded-circle">
                        </div>
                    @endif
                </div>

            </div>
            <div style="padding-left: 50px">
                <div style="padding-bottom: 15px">
                    <b style="font-size: 18px">{{$user->name}}</b></div>
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
            <!--<li style="padding: 10px"><a href="/tweets/{{$post->id}}"> {{$post->content}}</a></li> -->

                    <div style="padding: 15px">
                        <div class="container"
                             style="padding-bottom: 10px; border-style: ridge; margin: 10px;margin: auto;width: 50%;">
                            <div class="well">
                                <div class="media">
                                    @if($user->profile_photo_path !=null)
                                    <a class="pull-left" style="padding: 15px" href="/account/{{$post->user_id}}">

                                            <div>
                                                <img src="/storage/{{$user->profile_photo_path}}"
                                                     width="50" height="50" class="rounded-circle">
                                            </div>

                                    </a>
                                    @endif
                                    <div class="media-body">
                                        <h6 class="media-heading"
                                            style="line-height: 3em">{{$post -> user-> username}}</h6>
                                        <p>{{$post->content}}</p>
                                        @if($post->image !=null)
                                            <div>
                                                <img src="/storage/{{$post->image}}"
                                                     style="max-width:300px;max-height:300px;height: auto; width: auto">
                                            </div>
                                        @endif

                                        <div class="flex-column" style="padding-top: 15px">
                                            <i style="font-size: 12px; padding-right: 4px">Comments</i>
                                            <i style="font-size: 12px; padding-right: 4px">Reposts</i>
                                            <i style="font-size: 12px; padding-right: 4px">Likes: {{$post->likes ?? 0}}</i>
                                            <i style="font-size: 12px">Created: {{$post->created_at->format('d-m-Y')}}</i>
                                        </div>
                                        <!--<a href="/tweets/{{$post->id}}" class="stretched-link"></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            @endforeach
        </ul>

    </div>

@endsection
