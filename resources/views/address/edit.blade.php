@extends('layouts/app')

@section('content')
{!! Form::model($address,['route' => ['address.update', $address ] ,'method' => 'put' ]) !!}
    <div class="form-group">
    <label for="my-input">addresses</label>
        {!! Form::text('addresses',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Update address',['class'=>'btn btn-primary'])  !!}

{!! Form::close() !!}
@endsection