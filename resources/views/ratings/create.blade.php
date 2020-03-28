@extends('layouts.app')

@section('content')

    <div class="container">
      <h3>Create</h3>
      <hr>
        {!! Form::open(['method' => 'POST', 'route' => 'ratings.store', 'class' => 'form-horizontal']) !!}

            <div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
    {!! Form::label('post_id', 'Post') !!}
    {!! Form::select('post_id', $posts, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('post_id') }}</small>
</div>
<div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
    {!! Form::label('rating', 'Rating') !!}
    {!! Form::number('rating', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('rating') }}</small>
</div>


            <div class="btn-group pull-right">
                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                {!! Form::submit("Create ", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}

    </div>

@endsection
