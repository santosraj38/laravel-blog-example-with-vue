@extends('layouts.app')

@section('content')

  <div class="container">
    <h3>Create</h3>
    <hr>
    {!! Form::model($comment, ['route' => ['comments.update',$comment->id], 'method' => 'PUT','class'=>'form-horizontal']) !!}

    <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
    {!! Form::label('post_id', 'Post') !!}
    {!! Form::select('post_id', $posts, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('post_id') }}</small>
</div>
<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
    {!! Form::label('comment', 'Comment') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('comment') }}</small>
</div>


    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Update ", ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
  </div>

@endsection
