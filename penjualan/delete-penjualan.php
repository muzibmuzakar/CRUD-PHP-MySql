<?php

include("../koneksi.php");

if( isset($_GET['faktur']) ){

    // ambil faktur dari query string
    $faktur = $_GET['faktur'];

    // buat query hapus
    $sql = "DELETE FROM penjualan WHERE faktur=$faktur";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: penjualan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>