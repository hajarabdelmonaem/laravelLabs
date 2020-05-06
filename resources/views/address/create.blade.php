@extends('layouts/app')

@section('content')
{!! Form::open(['route' => 'address.store']) !!}
    <div class="form-group">
    <label for="my-input">address</label>
        {!! Form::text('addresses',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Add new Address',['class'=>'btn btn-primary'])  !!}

{!! Form::close() !!}
@endsection