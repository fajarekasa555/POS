<body>
    <h1>Tambah Data User</h1>
        <a href="/user">Kembali</a>
    <br>
    <br>
    <form action="/user/tambah_simpan" method="POST">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="level_id">Level Pengguna:</label><br>
        <select id="level_id" name="level_id">
            <option value="1">Admin</option>
            <option value="2">Manager</option>
            <option value="3">Kasir</option>
        </select><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>