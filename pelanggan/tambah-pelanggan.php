<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 1</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h4>Soal 1</h4>
            <h1>Data Penjualan</h1>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center">Form Tambah pelanggan</h2><br>
        <form action="simpan-pelanggan.php" method="post">
            <div class="form-group">
                <label>Nomor pelanggan :</label>
                <input type="text" class="form-control" id="nopelanggan" name="nopelanggan">
            </div>
            <div class="form-group">
                <label>Nama pelanggan :</label>
                <input type="text" class="form-control" id="Namapelanggan" name="Namapelanggan">
            </div>
            <div class="form-group">
                <label>Alamat :</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat">
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success"/>
        </form>
        <a href="tambah-pelanggan.php" type="button" class="btn btn-warning" style="margin-top:10px; margin-bottom:10px;"><i class="fas fa-undo"></i> Ulangi</a><br>
        <a href="index.php" type="button" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Kembali</a>
    </div>

    <footer class="footer"style="margin-top:50px;">
      <div class="container">
        <span class="text-muted text-center">084 - Muzib Muzakar</span>
      </div>
    </footer>
</body>
</html>