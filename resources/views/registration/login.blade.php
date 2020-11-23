@extends('layouts.app')

@section('content')
    @include('partials.flash_messages')
    <message-component></message-component>   
    <login-component></login-component>
    <what-component></what-component>
@endsection