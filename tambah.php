<html>
    <head>
        <title>Form Tambah Data</title>
        <body>
            <h1>Form Tambah</h1>
            <form action="insert.php" method="post">
                <div>
                    <label>Nama</label><br>
                    <input type="text" name="nama" placeholder="Masukkan nama anda" required="">
                </div>
                <div>
                    <label>Alamat</label><br>
                    <textarea rows="10" name="alamat" placeholder="Masukkan alamat anda"
                    required=""></textarea>
                </div>
                <div>
                    <button type="submit">Simpan</button>
                    <button type="reset">Reset</button>
            </div>

        </body>
    </head>
</html>