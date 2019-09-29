@extends('pages.layout')

@section('content')

@component('components/hero_container', ['image'=>'/img/slider/delta.png'])
    @slot('title')
        {{ $bus->brands->name ?? "N/A"}}
    @endslot
@endcomponent

<div class="row">
    <div class="col-md-12 align-self-center">
        <div class="row justify-content-center">
            <div class="col-10" >
                <h2 class="text-center">{{$bus->title ?? "N/A"}}</h2>
                <div class="subtitle text-center mb-4">{{$bus->types->name ?? "N/A"}}</div>
                <p class="text-center mt-5">{{$bus->description ?? "N/A"}}</p>
            </div>
        </div>
    </div>
</div>

@component('components/gallery', 
    ['pictures'=> $pics ])
    
    @slot('title')
        Explore {{$bus->brands->name ?? "N/A"}}
    @endslot
@endcomponent

@endsection