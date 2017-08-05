
@extends('layouts.master')


@section('content')
    <h1>Đây là trang nội dung chi tiết<h1>
    <button onclick="window.history.back()" class = "btn btn-primary">Back</button>
        <h2>{{$post->title}}</h2>
        <h4>{!!$post->content!!}<h4>       
@endsection

