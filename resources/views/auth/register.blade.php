@extends('layouts.portal')

@section('content')
    @parent
    {!! Form::open(['route' => 'register', 'method' => 'post', 'name' => 'register']) !!}
    {!! Form::text('username', null, ['placeholder' => 'USERNAME: USERNAME_123', 'required' => true, 'id' => 'username']) !!}
    {!! Form::email('email', null, ['placeholder' => 'EMAIL: USERNAME@EXAMPLE.COM', 'required' => true]) !!}
    {!! Form::text('phone', null, ['placeholder' => 'PHONE: 79998887766', 'type' => 'number']) !!}
    {!! Form::password('password', ['placeholder' => 'PASSWORD: #P12!3*a-s,s.', 'required' => true]) !!}
    {!! Form::password('password_confirm', ['placeholder' => 'CONFIRM PASSWORD: #P12!3*a-s,s.', 'required' => true]) !!}
    {!! Form::submit('REGISTER', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection
