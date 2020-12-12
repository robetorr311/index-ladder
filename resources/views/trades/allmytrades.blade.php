@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <mytrades-component trade-values="{{ $TradeValues }}" ></mytrades-component>
@endsection