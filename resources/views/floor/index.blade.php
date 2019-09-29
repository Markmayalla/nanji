@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="animated fadeIn">
        <div class="card col-md-12">
            <div class="card-header">
                Floors
            </div>
            <div class="card-body">
                <a href="{{ route('floor.create') }}">
                    <button class="btn btn-primary pull-right">Create</button>
                </a>
                <br>
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Edit</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($floors as $floor)
                                <tr>
                                    <td>{{ $floor->name }}</td>
                                    @php($route = route('floor.edit',['id' => $floor->id]))
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
