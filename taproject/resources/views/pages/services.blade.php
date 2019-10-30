@extends('layouts.app')

@section('content')
    <h1>{{$new}}</h1>
    <p>{{$old}}</p>
    @if(count($yes)>0)
        <ul class= "list-group">
            @foreach($yes as $yes)
             <li class ="list-group-item">{{$yes}}</li>
            @endforeach
        </ul>
    @endif
@endsection
