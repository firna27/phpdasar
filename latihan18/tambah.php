<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");  
    exit;
}
require 'function.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
   
   // cek apakah data berhasil di tambahkan atau tidak
   if( tambah($_POST) > 0 ) {
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'latihan11.php';
    </script>
    ";
   } else {
    echo "
    <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'latihan11.php';
    </script>
    ";
   }

}
?>
<html>
    <head>
        <title>tambah data siswa</title>
    </head>
    <body>
        <h1>Tambah data siswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nisn">Nama : </label>
                <input type="text" name="nisn" id="nisn" required>
            </li>
            <li>
                <label for="nama">NISN : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>
        </form>
    </body>
</html>