@extends('layouts/app')

@section('content')
{!! Form::open(['route' => 'contact.store']) !!}
    <div class="form-group">
    <label for="my-input">Name</label>
    <select class="form-control m-bot15" name="name">
        @if ($userslist->count())

            @foreach($userslist as $user)
                <option value="{{ $user->name }}">{{ $user->name }}</option> 
            @endforeach   
        @endif
</select>

    </div>
    <div class="form-group">
    <label for="my-input">Mobile</label>
        {!! Form::number('mobile',null,['class'=>'form-control'])  !!}
    </div>
    {!! Form::submit('Add new Contact',['class'=>'btn btn-primary'])  !!}
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