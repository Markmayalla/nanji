@extends('pages.layout')

@section('content')

@php
$url = 'https://i.pinimg.com/originals/9a/f5/1b/9af51b585d1417159da7d6f93d1e35a5.jpg';
@endphp

@component('components/hero_container', ['image'=>$url])
    @slot('title')
        About Us
    @endslot
@endcomponent

@component('components/background')
@endcomponent

@component('components/about')
@endcomponent

@component('components/direction')
@endcomponent

@component('components/team')
@endcomponent

@endsection