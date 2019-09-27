<form action="{{route('makes.update',['id'=>$brand->id])}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$brand->name}}"/><br />
    @if($errors->has("name"))
    {{$errors->first('name')}}
    @endif
    <textarea name="description">{{$brand->description}}</textarea><br />
    @if($errors->has("description"))
    {{$errors->first('description')}}
    @endif
    <input type="submit" value="Submit" />
</form>