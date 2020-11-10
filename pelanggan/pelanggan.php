<?php include ("../koneksi.php"); ?>

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
        <h2 class="text-center">List Pelanggan</h2>
        <a href="../index.php" type="button" class="btn btn-primary btn-sm" style="margin-bottom:10px"><i class="fas fa-chevron-left"></i> Kembali</a>
        <a href="tambah-pelanggan.php" class="float-right"><button type="button" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i> Tambah</button></a>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">nopelanggan</th>
                <th scope="col">namapelanggan</th>
                <th scope="col">alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM pelanggan";
                $query = mysqli_query($db, $sql);

                while($p = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<th>".$p['nopelanggan']."</th>";
                    echo "<td>".$p['Namapelanggan']."</td>";
                    echo "<td>".$p['Alamat']."</td>";
                    
                    echo "<td>";
                    echo "<a class='btn btn-outline-secondary btn-sm' href='edit-pelanggan.php?nopelanggan=".$p['nopelanggan']."'><i class='fas fa-user-edit'></i> Edit</a> ";
                    echo "<a class='btn btn-outline-danger btn-sm' href='delete-pelanggan.php?nopelanggan=".$p['nopelanggan']."'><i class='fas fa-user-minus'></i> Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
        
    </div>
    <footer class="footer"style="margin-top:50px;">
      <div class="container">
        <span class="text-muted text-center">084 - Muzib Muzakar</span>
      </div>
    </footer>
</body>
</html>