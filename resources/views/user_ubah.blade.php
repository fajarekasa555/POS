<body>
    <h1>Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br>
    <br>

    <form action="/user/ubah_simpan/{{  $data->user_id }}" method="post">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="{{ $data->username }}"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $data->nama }}"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="level_id">Level Pengguna:</label><br>
        <select id="level_id" name="level_id">
            <option value="1" {{ $data->level_id == 1 ? 'selected' : '' }}>Admin</option>
            <option value="2" {{ $data->level_id == 2 ? 'selected' : '' }}>Manager</option>
            <option value="3" {{ $data->level_id == 3 ? 'selected' : '' }}>Kasir</option>
        </select><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>