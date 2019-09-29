@extends('layouts.app2')
@section('content')
    <div class="container">
        <div class="animated fadeIn">
            <div class="card col-md-12">
                <div class="card-header">
                    Edit Brand
                </div>
                <div class="card-body">
                    @php 
                        function replace_id($field){
                            return str_replace('_id','',$field);
                        }

                        function contain_id($field){
                            return strpos($field,'_id');
                        }
                    @endphp

                    <form class="form" method="POST" action="{{ route('brand.update',['id' => $brand->id]) }}">
                        {{ csrf_field() }}
                        @method('PUT')
                        @foreach($fields as $field)
                            <div class="form-group">
                                <label for="{{$field}}">{{ ucfirst(str_replace('_',' ',replace_id($field)))}}</label>
                                @if(contain_id($field))
                                    <select name="{{replace_id($field)}}" id="{{replace_id($field)}}" class="form-control">
                                        <option value={{NULL}}>select {{ ucfirst(str_replace('_',' ',replace_id($field)))}}</option>
                                        @php($variables = str_replace('_',' ',replace_id($field)).'s')
                                        @foreach($$variables as $d)
                                            <option {{$brand->$field == $d->id ? 'selected' : '' }} value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                    {!! "@if ($errors->has('".replace_id($field)."'))" !!}
                                        <small class="form-text text-danger">{!! "{{$errors->first('".replace_id($field).")}}" !!}</small>
                                    {!! "@endif" !!}
                                @else
                                    <input type="text" name="{{$field}}" value="{{$brand->$field}}" id="{{$field}}" class="form-control" placeholder="Enter {{ ucfirst(str_replace('_',' ',replace_id($field)))}}" />
                                @endif
                                {!! "@if ($errors->has('".$field."'))" !!}
                                <small class="form-text text-danger">{!! "{{$errors->first('".$field.")}}" !!}</small>
                                {!! "@endif" !!}
                            </div>
                        @endforeach
                        <input type="submit" class="btn btn-primary pull-right" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection