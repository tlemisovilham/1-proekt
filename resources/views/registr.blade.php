<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/store') }}" method="GET">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <input type="text" name="password" placeholder="password"><br><br>
        <input type="submit" name="submit" value="SEND">
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>