
@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <a href="{{ url('/blog', ['id'=> $post->id ] ) }}">
         <h2>{{$post->title}}</h2>
         </a>
        <h4>{!! $post->content !!}<h4>
    @endforeach
    
@stop
