@extends('layouts.app')

@section('content')
    <p>it promises to be awesome</p>
    @if(count($Post)>0)
         @foreach($Post as $name)
             <div class ="card">
             <h3><a href="/Post/{{$name->id}}">{{$name->title}}</a></h3>
             <small>Written on{{$name->created_at}}</small>
             </div>
            @endforeach
    @else 
    <p> no post found</p>
    @endif
    {!! $Post->links() !!}
@endsection

