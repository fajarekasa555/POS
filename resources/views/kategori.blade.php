<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori</title>
</head>
<body>
<h1>Data Kategori</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kategori Kode</th>
            <th>Kategori Nama</th>
        </tr>
        @foreach ($data as $kategori)
        <tr>
            <td>{{ $kategori->kategori_id }}</td>
            <td>{{ $kategori->kategori_kode }}</td>
            <td>{{ $kategori->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>