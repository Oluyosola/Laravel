@extends('layouts.app')

@section('content')
@foreach($Post as $name)
<div class ="card">
<h3><a href="/Post/{{$name->id}}">{{$name->title}}</a></h3>
<small>Written on{{$name->created_at}}</small>
</div>
@endforeach

{{-- <h1>{{$Post->title}}</h1>
<div>
    {{$Post->body}}
</div> --}}
{{-- <hr> --}}
{{-- <small>Written on {{$Post->created_at}}</small>  --}}
@endsection
