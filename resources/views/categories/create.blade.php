@extends('layouts.app')

@section('content')

    <div class="container">
      <h3>Create</h3>
      <hr>
        {!! Form::open(['method' => 'POST', 'route' => 'categories.store', 'class' => 'form-horizontal']) !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
    <small class="text-danger">{{ $errors->first('name') }}</small>
</div>


            <div class="btn-group pull-right">
                {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
                {!! Form::submit("Create ", ['class' => 'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}

    </div>

@endsection
