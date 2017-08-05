
@extends('layouts.master')

@section('content')
    <button class = "btn btn-primary" onclick ="location.href='{{ url('/blog/create')}}'">Create</button> 

    <table class ="table">
        <thread>
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thread>
        <tbody>
            @foreach(@$posts as $post)
            <tr>
                <th>{{$id++}}</th>
                <th>{{$post->title}}</th>
                <th>{!!$post->content!!}</th>
                <th>
                    <form method ="POST" action = "{{route('delete', ['id' => $post -> id]) }}">
                    <input type = "button" value = "Show" class = "btn btn-primary" onclick ="location.href='{{route('show', ['id'=> $post->id ])}}'">
                    <input type = "button" value = "Edit" class = "btn btn-warning" onclick ="location.href = '{{ url('blog/edit',['id'=> $post->id ] ) }}'">
                    {{ csrf_field()}}
                    <input type = "submit" value = "Delete" class = "btn btn-danger">
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
