<?php

include("../koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $faktur = $_POST['faktur'];
    $nopelanggan = $_POST['nopelanggan'];
    $tanggalpenjualan = $_POST['tanggalpenjualan'];

    // buat query update
    $sql = "UPDATE penjualan SET nopelanggan='$nopelanggan', tanggalpenjualan='$tanggalpenjualan' WHERE faktur=$faktur";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: penjualan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>