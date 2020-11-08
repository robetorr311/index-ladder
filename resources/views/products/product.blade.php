@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <product-component product-value="{{ $ProductValue }}" logged-value="{{ $LoggedValue }}" message-value="{{ $LoadedMessages }}" >
    </product-component>
@endsection