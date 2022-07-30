<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/logout') }}">logout</a>
    <ul>
        <li><a href="{{ url('/registr') }}">Sign up</a></li>
        <li><a href="{{ url('/login') }}">Sign in</a></li>
    </ul>
</body>
</html>