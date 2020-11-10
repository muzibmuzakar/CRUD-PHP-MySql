<?php

include("../koneksi.php");

if( isset($_GET['nopelanggan']) ){

    // ambil nopelanggan dari query string
    $nopelanggan = $_GET['nopelanggan'];

    // buat query hapus
    $sql = "DELETE FROM pelanggan WHERE nopelanggan=$nopelanggan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: pelanggan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>