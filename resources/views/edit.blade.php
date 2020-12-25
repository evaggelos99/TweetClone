@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="/settings/{{Auth::user()->id}}/update" enctype="multipart/form-data" method="POST">
            @method('PATCH')
            @csrf
            <div class="row justify-content-center">


                <div class="col-md-8">


                    <div class="card p-3">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Change your name:') }}</label>

                            <div class="col-md-6">
                                <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="biography" class="col-md-4 col-form-label text-md-right">{{ __('Set biography:') }}</label>

                            <div class="col-md-6">
                                <input name="biography" id="biography" type="text" class="form-control @error('biography') is-invalid @enderror" value="{{ old('biography') }}">

                                @error('biography')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Set location:') }}</label>

                            <div class="col-md-6">
                                <input name="location" id="location" type="text" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}">

                                @error('location')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Profile image: </label>
                            <div class="col-md-6">
                                <input type="file" id="image" name="image">
                            </div>
                            @if($errors -> has('image'))
                                <strong>{{$errors -> first('image') }}</strong>
                            @endif

                        </div>
                        <div class="form-group col">
                            <label for="button" class="col-md-4 col-form-label text-md-right"></label>
                            <button class="btn btn-primary" style="border-radius: 20px; background-color: rgb(0,172,243)">
                                Change settings
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
