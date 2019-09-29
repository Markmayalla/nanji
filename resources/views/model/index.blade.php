@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="animated fadeIn">
        <div class="card col-md-12">
            <div class="card-header">
                Models
            </div>
            <div class="card-body">
                <a href="{{ route('model.create') }}">
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
                            @foreach($models as $model)
                                <tr>
                                    <td>{{ $model->name }}</td>
                                    @php($route = route('model.edit',['id' => $model->id]))
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

