@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <editproduct-component product-value="{{ $productValue }}">
    </editproduct-component>
@endsection