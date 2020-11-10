<?php

include("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['faktur']) ){
    header('Location: penjualan.php');
}

//ambil id dari query string
$faktur = $_GET['faktur'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM penjualan WHERE faktur=$faktur";
$query = mysqli_query($db, $sql);
$penjualan = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

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
        <h2 class="text-center">Form Tambah penjualan</h2><br>
        <form action="simpan-edit-penjualan.php" method="post">
            <div class="form-group">
                <label>Faktur :</label>
                <input type="text" class="form-control" id="faktur" name="faktur" value="<?php echo $penjualan['faktur'] ?>">
            </div>
            <div class="form-group">
                <label>Nomor Pelanggan :</label>
                <input type="text" class="form-control" id="nopelanggan" name="nopelanggan" value="<?php echo $penjualan['nopelanggan'] ?>">
            </div>
            <div class="form-group">
                <label>Tanggal Penjualan :</label>
                <input type="date" class="form-control" id="tanggalpenjualan" name="tanggalpenjualan" value="<?php echo $penjualan['tanggalpenjualan'] ?>">
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success"/>
        </form>
        <a href="tambah-penjualan.php" type="button" class="btn btn-warning" style="margin-top:10px; margin-bottom:10px;"><i class="fas fa-undo"></i> Ulangi</a><br>
        <a href="index.php" type="button" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Kembali</a>
    </div>

    <footer class="footer"style="margin-top:50px;">
      <div class="container">
        <span class="text-muted text-center">084 - Muzib Muzakar</span>
      </div>
    </footer>
</body>
</html>