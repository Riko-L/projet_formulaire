@extends('template')


@section('content')

    {!! Form::open(array('route' => 'form')) !!}
    {!! Form::label('email','Votre email : ') !!}
    {!! Form::email('email'); !!}
    <p class="errors-msg"> {!!$errors->first('email')!!} </p>
    {!! Form::submit() !!}
    {!! Form::close() !!}


@endsection

