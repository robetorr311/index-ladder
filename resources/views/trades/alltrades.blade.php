@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <section>
    <alltrades-component trade-values="{{ $TradeValues }}"  >
    </alltrades-component>
    </section>
@endsection