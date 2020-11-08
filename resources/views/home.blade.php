@extends('layouts.app')

@section('content')
  @include('partials.flash_messages')
  <message-component></message-component>
  <section>
      <slide-component></slide-component> 
  </section>
      <section>
        <products-component products-values=" {{ $ProductsValues }} "></products-component>
      </section> 
      <section>
        <skills-component skills-values=" {{ $SkillValues }} " ></skills-component>
      </section> 
      <section>
        <services-component services-values=" {{ $ServiceValues }} " ></services-component>
      </section>      
  <section>
  </section>  
@endsection
