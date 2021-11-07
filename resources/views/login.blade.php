<html>
<head></head>
<body>
<form method="POST" action="{{route('loginAdmin')}}">
    @csrf
    email<input type="email" name="email">
    <br>
    password<input type="password" name="password">
    <br>
    login<input type="submit">
</form>
</body>
</html>
