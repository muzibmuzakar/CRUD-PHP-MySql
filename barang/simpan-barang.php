<?php

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $Kodebarang = $_POST['Kodebarang'];
    $Namabarang = $_POST['Namabarang'];
    $Hargabarang = $_POST['Hargabarang'];

    $sql = "INSERT INTO barang ( Kodebarang, Namabarang, Hargabarang) VALUE ('$Kodebarang', '$Namabarang', '$Hargabarang')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: barang.php');
    } else {
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>