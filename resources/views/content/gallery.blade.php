@extends('layouts.app')

@section('content')

    @include('partials.flash_messages')
      <message-component></message-component>
      <section>
        <gallery-component gallery-values= "{{ $TradeValues }}" ></gallery-component>
      </section>
@endsection