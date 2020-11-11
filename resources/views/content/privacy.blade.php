@extends('layouts.app')

@section('content')

    @include('partials.flash_messages')
      <message-component></message-component>      
      <privacy-component></privacy-component>
@endsection