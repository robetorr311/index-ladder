@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <twostep-component email-value="{{ $emailValue }}">
    </twostep-component>
    <what-component></what-component>
@endsection