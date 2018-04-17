@extends('templates.app')

@section('content')
<ul>
    @foreach($event as $e)
    <li><a href="/event/{{$e->id}}">{{$e->text}}</a></li>
    @endforeach
</ul>

@endsection
