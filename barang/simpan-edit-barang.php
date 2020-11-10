<?php

include("../koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $Kodebarang = $_POST['Kodebarang'];
    $Namabarang = $_POST['Namabarang'];
    $Hargabarang = $_POST['Hargabarang'];

    // buat query update
    $sql = "UPDATE barang SET Namabarang='$Namabarang', Hargabarang='$Hargabarang' WHERE Kodebarang=$Kodebarang";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: barang.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>