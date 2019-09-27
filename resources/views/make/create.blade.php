<form action="{{route('makes.store')}}" method="post">
    @csrf
    <input type="text" name="name" /><br />
    <textarea name="description"></textarea><br />
    <input type="submit" value="Submit" />
</form>