@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                        <div class="card" style="width: 18rem" >
                            <div class="card-body">
                                <h5 class="card-title">My Mobile Phones</h5>
                                @foreach ($mobiles as $mobile)
                                <p class="card-text">Number :{{ $mobile->mobiles }}</p>
                                <a href="{{route('mobile.edit',$mobile)}}" class="btn btn-primary">Edit This Number</a>
                                {!! Form::open(['route' => ['mobile.destroy', $mobile ] ,'method' => 'delete' ]) !!}
                                    {!! Form::submit('Delete Number',['class'=>'btn btn-danger'])  !!}
                                {!! Form::close() !!}
                                @endforeach
                            </div>
                        </div>
                    
                    
                    
                </div>
            </div>
            <a href="{{ URL::route('mobile.create') }}">Add A Phone Number</a>
            @foreach ($addresses as $address)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">My address </h5>
                                <p class="card-text">Address-Details :{{ $address->addresses }}</p>
                                <a href="{{route('address.edit',$address)}}" class="btn btn-primary">Edit This address</a>
                                {!! Form::open(['route' => ['address.destroy', $address ] ,'method' => 'delete' ]) !!}
                                    {!! Form::submit('Delete address',['class'=>'btn btn-danger'])  !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endforeach
            <a href="{{ URL::route('address.create') }}">Add An Address</a>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">My Contacts </h5>
                                @foreach ($contacts as $contact)
                                <p class="card-text">Contact Name :{{ $contact->name }}</p>
                                <p class="card-text">Contact Phone-Number :{{ $contact->mobile }}</p>
                                <a href="{{route('contact.edit',$contact)}}" class="btn btn-primary">Edit This contact</a>
                                {!! Form::open(['route' => ['contact.destroy', $contact ] ,'method' => 'delete' ]) !!}
                                    {!! Form::submit('Delete contact',['class'=>'btn btn-danger'])  !!}
                                {!! Form::close() !!}
                                @endforeach
                            </div>
                        </div>
                    
            <a href="{{ URL::route('contact.create') }}">Add A Contact</a>
        </div>
    </div>
</div>
@endsection
