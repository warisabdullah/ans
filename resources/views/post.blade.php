<html>
<head></head>
<body>
<form method="POST" action="{{ route('savePost') }}" enctype="multipart/form-data">
    @csrf
    title <input type="text" name="title">
    <br>
    body<input type="text" name="body">
    <br>
    Select Image<input type="file" name="image">
    submit<input type="submit">
</form>
</body>
</html>
