@extends('layouts.app')

@section('content')
    <slide-component></slide-component> 
    @include('partials.flash_messages')
    <message-component></message-component>   
    <login-component></login-component>
    <what-component></what-component>

@endsection