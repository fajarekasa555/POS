<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User </title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Jumlah Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data }}</td>
        </tr>
        {{-- <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level Pengguna</th>
        </tr>
        <tr>
            <td>{{ $data->user_id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->level_id }}</td>
        </tr> --}}
        {{-- @foreach ($data as $level)
        <tr>
            <td>{{ $level->user_id }}</td>
            <td>{{ $level->username }}</td>
            <td>{{ $level->nama }}</td>
            <td>{{ $level->level_id }}</td>
        </tr>
        @endforeach --}}
    </table>
</body>
</html>