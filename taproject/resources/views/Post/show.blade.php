@extends('layouts.app')

@section('content')
<a href="/Post" class = "btn btn-success">Go Back</a>
<h1>{{$Post->title}}</h1>
<div>
    {{$Post->body}}
    {{-- {{$Post->id}} --}}
    <form action="/dd" method="POST">
        <textarea name="" placeholder="Enter comment here.." class="form-control" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Comment" class="btn btn-primary">
    </form>
</div>
{{-- <hr> --}}
<small>Written on {{$Post->created_at}}</small>
@endsection
    {{-- @foreach($Post as $Post)
             <div class ="card">
             <h3>{{$Post->body}}</h3>
             {{-- <small>Written on{{$Post->created_at}}</small> --}}
             {{-- </div>
            @endforeach --}}
