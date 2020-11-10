<?php

include("../koneksi.php");

if( isset($_GET['Kodebarang']) ){

    // ambil Kodebarang dari query string
    $Kodebarang = $_GET['Kodebarang'];

    // buat query hapus
    $sql = "DELETE FROM barang WHERE Kodebarang=$Kodebarang";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: barang.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>