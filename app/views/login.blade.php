@extends('layout')

@section('main')

<h1>Login</h1>
<form method="post" action="/login">

            {{ Form::label('nick', 'Nick:') }}
            {{ Form::text('nick') }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::input('password', 'password') }}

            {{ Form::submit('Submit', array('class' => 'btn')) }}
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


    