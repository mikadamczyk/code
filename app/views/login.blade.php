@extends('layout')

@section('main')

<h1>Logowanie</h1>
<form method="post" action="/login">

            {{ Form::label('nick', 'Nick:') }}
            {{ Form::text('nick') }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::input('password', 'password') }}

            {{ Form::submit('Zaloguj', array('class' => 'btn')) }}
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


    