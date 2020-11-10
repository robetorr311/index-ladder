@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <twostep-component email-value="{{ $emailValue }}">
    </twostep-component>
@endsection