@extends('layouts.app')

@section('content')

    <div class="container">
      <h3>Create</h3>
      <hr>
        {!! Form::open(['method' => 'POST', 'route' => 'posts.store', 'class' => 'form-horizontal','files'=>'true']) !!}

            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('category_id') }}</small>
</div>
<div class="form-group{{ $errors->has('coverimage') ? ' has-error' : '' }}">
    {!! Form::label('coverimage', 'Cover Image') !!}
    {!! Form::file('coverimage', ['required' => 'required','accept'=>' .jpg, .jpeg, .png']) !!}
    <small class="text-danger">{{ $errors->first('coverimage') }}</small>
</div>
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('title') }}</small>
</div>
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('body') }}</small>
</div>
<div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
    {!! Form::label('tags[]', 'Tag') !!}
    {!! Form::select('tags[]', $tags, null, ['class' => 'ui dropdown fluid', 'required' => 'required', 'multiple']) !!}
    <small class="text-danger">{{ $errors->first('tags') }}</small>
</div>


            <div class="btn-group pull-right">
                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                {!! Form::submit("Create ", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}

    </div>

@endsection
