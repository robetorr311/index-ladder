@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <product-component product-value="{{ $ProductValue }}" >
    </product-component>
@endsection