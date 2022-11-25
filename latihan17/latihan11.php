<?php
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
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>
       <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">cari!</button>
       </form>
 <br>
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
</body>
</html>