@extends('layouts.app')

@section('content')
  @include('partials.flash_messages')
      <message-component></message-component>
      <section>
        <slide-component></slide-component> 
      </section>
      <section>
        <products-component></products-component>
      </section> 
      <section>
        <skills-component></skills-component>
      </section> 
      <section>
        <services-component></services-component>
      </section>     
@endsection
