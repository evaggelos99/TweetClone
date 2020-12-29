@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/comment" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group row">
                <label for="tweet" class="col-md-4 col-form-label text-md-right"></label>

                <h3 class="col-md-6">Create comment</h3>
            </div>

            <div class="form-group row">
                <label for="Comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>

                <div class="col-md-6">
                    <input name="Comment" id="Comment" type="text" class="form-control @error('Comment') is-invalid @enderror" value="{{ old('Comment') }}">

                    @error('Comment')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="button" class="col-md-4 col-form-label text-md-right"></label>
                <button class="btn btn-primary" style="border-radius: 20px; background-color: rgb(0,172,243)">
                    Post comment
                </button>
            </div>


        </form>
    </div>


@endsection
