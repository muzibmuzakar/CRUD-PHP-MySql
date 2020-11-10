<?php

include("../koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['Kodebarang']) ){
    header('Location: list.php');
}

//ambil id dari query string
$Kodebarang = $_GET['Kodebarang'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM barang WHERE Kodebarang=$Kodebarang";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

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
        <h2 class="text-center">Form Tambah Barang</h2><br>
        <form action="simpan-edit-barang.php" method="post">
            <div class="form-group">
                <label>Kode Barang :</label>
                <input type="text" class="form-control" id="Kodebarang" name="Kodebarang" value="<?php echo $barang['Kodebarang'] ?>">
            </div>
            <div class="form-group">
                <label>Nama Barang :</label>
                <input type="text" class="form-control" id="Namabarang" name="Namabarang" value="<?php echo $barang['Namabarang'] ?>">
            </div>
            <div class="form-group">
                <label>Harga Barang :</label>
                <input type="number" class="form-control" id="Hargabarang" name="Hargabarang" value="<?php echo $barang['Hargabarang'] ?>">
            </div>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-success"/>
        </form>
        <a href="tambah-barang.php" type="button" class="btn btn-warning" style="margin-top:10px; margin-bottom:10px;"><i class="fas fa-undo"></i> Ulangi</a><br>
        <a href="index.php" type="button" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Kembali</a>
    </div>

    <footer class="footer"style="margin-top:50px;">
      <div class="container">
        <span class="text-muted text-center">084 - Muzib Muzakar</span>
      </div>
    </footer>
</body>
</html>