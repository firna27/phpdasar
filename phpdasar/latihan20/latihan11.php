<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");  
}

 require 'function.php';

 $siswa = query("SELECT * FROM siswa");
 // tombol cari ditekan
 if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
 }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Halaman Admin</title>
   
</head>
<body>
     <div class="container-fluid">
        <div class="row">
            <div class="col col-md-10 offset-md-1 shadow mt-5">
                <br>
     <a href="logout.php">logout</a>
    
    <h1>Daftar Siswa</h1>
         
       <br>

    <a class="btn btn-danger" href="tambah.php">Tambah data siswa</a>
    <br><br>

       <form class="d-flex" action="" method="post">

    <input  class="form-control me-4" type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
    <button class="btn btn-dark" type="submit" name="cari">cari!</button>
       </form>
 <br>
    <table class="table table-bordered bg-light.bg-gradient" border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>gambar</th>
        <th>nisn</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>
    </tr>
        

    <?php $i = 1; ?>
    <?php foreach( $siswa as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
         <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
         <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><img src="gambar/<?= $row["gambar"]; ?>" width="50">
        </td>
        <td><?= $row["nisn"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
   <?php endforeach; ?>

    </table>


    </div>
    </div>
    </div>
</body>
</html>