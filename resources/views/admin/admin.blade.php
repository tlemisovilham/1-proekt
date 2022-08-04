<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            'gszg'
            <th>№</th>
            <th>message</th>
            <th>file</th>
            <th>status</th>
            <th>Islendi</th>
            <th>delete</th>
       </tr>
        @foreach ($informations as $information)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $information->message }}</td>
                <td><img class="card-img-top location-img" src="{{ $information->file }}" alt="image" width="100"></td>
                <td>{{ $information->status }}</td>
                <td>
                    <form action="{{ url('admininfo/'.$information->id ) }}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="PUT">
                        <input type="submit" value="OK">
                    </form>
                </td>
                <td><form action="{{ route('admininfo.destroy',$information) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="delete">
                </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>