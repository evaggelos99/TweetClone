@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('comment.update', $comment->id)}}" enctype="multipart/form-data" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="tweet" class="col-md-4 col-form-label text-md-right"></label>
                <h3 class="col-md-6">Edit comment</h3>
            </div>
            <div class="form-group row">
                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                <div class="col-md-6">
                    <input name="comment" id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" value="{{ old('comment') }}">

                    @error('comment')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="button" class="col-md-4 col-form-label text-md-right"></label>
                <button class="btn btn-primary" style="border-radius: 20px; background-color: rgb(0,172,243)">
                    Edit comment
                </button>
            </div>
        </form>
    </div>


@endsection
