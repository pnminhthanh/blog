
@extends('layouts.app')


@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-18 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/blog', ['id'=> $post->id ] ) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-1 control-label">Title</label>

                            <div class="col-md-10">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $post -> title }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="content" class="col-md-1 control-label">Content</label>

                            <div class="col-md-10">
                                 <textarea class="form-control" rows="5" id="content" name="content">{{ $post -> content }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Done
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@push('script')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endpush

