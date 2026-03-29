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
    <a href="/user/tambah">Tambah Data</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level Pengguna</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $level)
        <tr>
            <td>{{ $level->user_id }}</td>
            <td>{{ $level->username }}</td>
            <td>{{ $level->nama }}</td>
            <td>{{ $level->level->level_kode }}</td>
            <td>{{ $level->level->level_nama }}</td>
            <td>
                <a href="/user/ubah/{{ $level->user_id }}">Edit</a> | 
                <a href="/user/hapus/{{ $level->user_id }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>