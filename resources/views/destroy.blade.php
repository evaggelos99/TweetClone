@extends('layouts.app')

@section('content')

<div class="form-group">
    <div class="row" style="padding-top: 10px; padding-left: 10px">
        <div class="col-sm">
            <p style="float: left">Warning this deletes all your posts, likes and comments</p>
        </div>
        <div class="col-sm">
            <button class="btn btn-danger" style="float: right; border-radius: 20px">
                Delete Account
            </button>
        </div>
    </div>
</div>
@endsection
