<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data level </title>
</head>
<body>
    <h1>Data level</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Level Kode</th>
            <th>Level Nama</th>
        </tr>
        @foreach ($data as $level)
        <tr>
            <td>{{ $level->level_id }}</td>
            <td>{{ $level->level_kode }}</td>
            <td>{{ $level->level_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>