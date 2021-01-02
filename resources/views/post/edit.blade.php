@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('tweet.update', $post->id)}}" enctype="multipart/form-data" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="tweet" class="col-md-4 col-form-label text-md-right"></label>

                <h3 class="col-md-6">Edit Tweet</h3>
            </div>

            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                <div class="col-md-6">
                    <input name="content" id="content" type="text" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}">

                    @error('content')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="tag" class="col-md-4 col-form-label text-md-right">{{ __('Tag') }}</label>

                <div class="col-md-6">
                    <input name="tag" id="tag" type="text" class="form-control @error('tag') is-invalid @enderror" value="{{ old('tag') }}">

                    @error('tag')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Change the image of the post: </label>
                <div class="col-md-6">
                    <input type="file" id="image" name="image">
                </div>
                @if($errors -> has('image'))
                    <strong>{{$errors -> first('image') }}</strong>
                @endif

            </div>

            <div class="form-group row">
                <label for="button" class="col-md-4 col-form-label text-md-right"></label>
                <button class="btn btn-primary" style="border-radius: 20px; background-color: rgb(0,172,243)">
                    Edit Tweet
                </button>
            </div>
        </form>
    </div>

@endsection
