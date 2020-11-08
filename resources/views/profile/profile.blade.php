@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <profile-component 
    registration-values="{{ $registrationValues }}" 
    url-picture="{{ $URLPicture }}"
    url-card="{{ $URLCard }}"
    url-license="{{ $URLLicense }}"    >
    </profile-component>
@endsection