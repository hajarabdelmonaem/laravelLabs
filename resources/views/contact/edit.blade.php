@extends('layouts/app')

@section('content')
{!! Form::model($contact,['route' => ['contact.update', $contact ] ,'method' => 'put' ]) !!}
    <div class="form-group">
    <label for="my-input">Name</label>
        {!! Form::text('name',null,['class'=>'form-control'])  !!}
    </div>
    <div class="form-group">
    <label for="my-input">Mobile</label>
        {!! Form::number('mobile',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Update contact',['class'=>'btn btn-primary'])  !!}

{!! Form::close() !!}
@endsection