<?php
 require 'function.php';
 $siswa = query("SELECT * FROM siswa");
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
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
         <a href="">ubah</a>
         <a href="">hapus</a>
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
</body>
</html>