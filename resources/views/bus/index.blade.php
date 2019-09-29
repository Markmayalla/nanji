@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="animated fadeIn">
        <div class="card col-md-12">
            <div class="card-header">
                Buses
            </div>
            <div class="card-body">
                <a href="{{ route('bus.create') }}">
                    <button class="btn btn-primary pull-right">Create</button>
                </a>
                <br>
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <td>Bus Name</td>
                                <td>Make</td>
                                <td>Model</td>
                                <td>Body Type</td>
                                <td>Types</td>
                                <td>Floor</td>
                                <td>Transmission</td>
                                <td>Passanger</td>
                                <td>Seat</td>
                                <td>Edit</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buses as $bus)
                                <tr>
                                    <td>{{ $bus->title }}</td>
                                    <td>{{ $bus->brands->name }}</td>
                                    <td>{{ $bus->models->name }}</td>
                                    <td>{{ $bus->body_type }}</td>
                                    <td>{{ $bus->types->name }}</td>
                                    <td>{{ $bus->floors->name }}</td>
                                    <td>{{ $bus->transmission }}</td>
                                    <td>{{ $bus->passanger_from }} {{ $bus->passanger_to ? ' ...' . $bus->passanger_to : '' }}</td>
                                    <td>{{ $bus->seat_from }} {{ $bus->seat_to ? ' ...' . $bus->seat_to : '' }}</td>
                                    @php($route = route('bus.edit',['id' => $bus->id]))
                                    <td><a href="{{ $route }}">edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('model_errors')
        <?php
            if(0 == 1){
                $call_model_sms("Do Locked","Do locked by $locker","success");
            }
        ?>
@endsection
