@extends('layouts.app')

@section('content')

    @include('partials.flash_messages')
      <message-component></message-component>
      <section>
        <dashboard-component routes-values="{{ url()->current() }}" trade-values= "{{ $TradeValues }}" ></dashboard-component>
      </section>
@endsection