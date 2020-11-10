<?php

include("../koneksi.php");

if(isset($_POST['simpan'])){

    $nopelanggan = $_POST['nopelanggan'];
    $Namapelanggan = $_POST['Namapelanggan'];
    $Alamat = $_POST['Alamat'];

    $sql = "INSERT INTO pelanggan ( nopelanggan, Namapelanggan, Alamat) VALUE ('$nopelanggan', '$Namapelanggan', '$Alamat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: pelanggan.php');
    } else {
        header('Location: ../index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>