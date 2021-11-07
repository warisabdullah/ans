<html>
<head></head>
<body>
<form method="POST" action="{{ route('updatePost') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" value="{{$user->id}}" hidden>
    title <input type="text" name="title" value="{{$user->title}}">
    <br>
    body<input type="text" name="body" value="{{$user->body}}">
    <br>
    <img src={{$user->image}} alt="" width="100px">
    <br>
    Select Image<input type="file" name="image" value="{{$user->image}}">
    Update<input type="submit" value="update">
</form>
</body>
</html>
