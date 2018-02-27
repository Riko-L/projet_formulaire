@extends('template')


@section('content')

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif



    {{ Form::open(array('route' => 'form')) }}

    {{ Form::label('email','Votre email : ') }}
    {{ Form::email('email') }}
    <p class="errors-msg"> {{$errors->first('email')}} </p>
    {{ Form::label('password','Votre mot de passe : ') }}
    {{ Form::password('password') }}
    <p class="errors-msg"> {{$errors->first('password')}} </p>
    {{ Form::label('password_confirmation','Confirmation du mot de passe : ') }}
    {{ Form::password('password_confirmation') }}
    <p class="errors-msg"> {{$errors->first('password')}} </p>


    {{ Form::submit() }}
    {{ Form::close() }}


@endsection

