@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <matchusersc-component user-values="{{ $UserValues }}" >
    </matchusersc-component>
@endsection