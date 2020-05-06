@extends('layouts/app')

@section('content')
{!! Form::model($mobile,['route' => ['mobile.update', $mobile ] ,'method' => 'put' ]) !!}
    <div class="form-group">
    <label for="my-input">mobile</label>
        {!! Form::number('mobiles',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Update mobile',['class'=>'btn btn-primary'])  !!}

{!! Form::close() !!}
@endsection