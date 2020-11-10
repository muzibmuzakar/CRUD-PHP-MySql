<?php

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $faktur = $_POST['faktur'];
    $nopelanggan = $_POST['nopelanggan'];
    $tanggalpenjualan = $_POST['tanggalpenjualan'];

    $sql = "INSERT INTO penjualan ( faktur, nopelanggan, tanggalpenjualan) VALUE ('$faktur', '$nopelanggan', '$tanggalpenjualan')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: penjualan.php');
    } else {
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>