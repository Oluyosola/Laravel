@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="panel-body">
                    <a href="Post/create" class="btn btn-primary">Create Post</a>
                    <a href="Post" class="btn btn-primary">all posts</a>
                    <a href="/mypost" class="btn btn-primary">my posts</a>
                    <h3>Your posts</h3>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} --}}
                        </div>
                    {{-- @endif --}}

                    {{-- You are logged in! --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
