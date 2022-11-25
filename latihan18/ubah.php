<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");  
    exit;
}

require 'function.php';
// ambil data di URL
$id = $_GET["id"];
// query data siswa berdasarkan id
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
   
   // cek apakah data berhasil di tambahkan atau tidak
   if( ubah($_POST) > 0 ) {
    echo "
    <script>
    alert('data berhasil diubah!');
    document.location.href = 'latihan11.php';
    </script>
    ";
   } else {
    echo "
    <script>
    alert('data gagal diubah!');
    document.location.href = 'latihan11.php';
    </script>
    ";
   }

}
?>
<html>
    <head>
        <title>ubah data siswa</title>
    </head>
    <body>
        <h1>Ubah data siswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $siswa["gambar"]; ?>">
        <ul>
            <li>
                <label for="nisn">NISN : </label>
                <input type="text" name="nisn" id="nisn" required value="<?= $siswa["nisn"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $siswa["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $siswa["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $siswa["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="gambar/<?= $siswa['gambar']; ?>" width="40"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data!</button>
            </li>
        </ul>
        </form>
    </body>
</html>