@extends('layouts/app')

@section('content')
{!! Form::open(['route' => 'mobile.store']) !!}
    <div class="form-group">
    <label for="my-input">mobile</label>
        {!! Form::number('mobiles',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Add new Mobile',['class'=>'btn btn-primary'])  !!}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::close() !!}
@endsection