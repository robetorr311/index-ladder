@extends('layouts.app')

@section('content')
    <message-component></message-component>
    <gallery-component gallery-values="{{ $GalleryValues }}" count-logged="{{ $CountLogged }}"  >
    </gallery-component>
@endsection