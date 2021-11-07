<html>
<head></head>
<body>
<form method="POST" action="{{route('saveAdmin')}}">
    @csrf
    name <input type="text" name="name">
    <br>
    email<input type="email" name="email">
    <br>
    password<input type="password" name="password">
    <br>
    submit<input type="submit">
</form>
</body>
</html>
