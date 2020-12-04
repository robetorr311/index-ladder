@extends('layouts.app')

@section('content')

    @include('partials.flash_messages')
      <message-component></message-component>   
      <section> 
      <choosecat-component></choosecat-component>
      <section>
      <section>
        <slide-component></slide-component> 
      </section>
      <what-component></what-component>
@endsection