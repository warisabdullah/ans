<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<table style="width:100%">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>image</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
        <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->title}}</td>
        <td>{{$user->body}}</td>
        <td><img src="{{$user->image}}" alt="{{$user->image}}" width="50px"></td>
        <td><button><a href="{{'edit/'.$user->id}}">Edit</a></button>
        <button><a href="{{'delete/'.$user->id}}">Delete</a></button></td>
        </tr>
    @endforeach
</body>
</html>

