@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <matchusersp-component user-values="{{ $UserValues }}" >
    </matchusersp-component>
@endsection