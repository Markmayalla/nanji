@extends('layout')

@section('content')

@component('components/hero_container', ['image'=>'/img/slider/delta.png'])
    @slot('title')
        Volgabus
    @endslot
@endcomponent

<div class="row">
    <div class="col-md-12 align-self-center">
        <div class="row justify-content-center">
            <div class="col-10" >
                <h2 class="text-center">Delta 12</h2>
                <div class="subtitle text-center mb-4">Inter City Bus</div>
                <p class="text-center mt-5">Every journey is a new story. Waiting for meeting with loved ones or bright dating. Amazing landscapes and discoveries. Volgabus did everything to ensure that any journey was filled with only positive emotions.</p>
            </div>
        </div>
    </div>
</div>


@component('components/gallery', 
    ['pictures'=>[
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png',
        'img/slider/delta.png'
        ]
    ])
    
    @slot('title')
        Explore Volgabus
    @endslot
@endcomponent

@endsection