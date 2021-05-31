@extends('layouts.app')

@section('content')

    @include('partials.flash_messages')
      <message-component></message-component>    
      <faq-component></faq-component>
      <helpme-component></helpme-component>      
@endsection