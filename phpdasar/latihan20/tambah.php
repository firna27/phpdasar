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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<style>
		ul li { list-style: none; }
	</style>
    </head>
    <body>
        <h1 class="text-center mt-5">Tambah data siswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
<div class="row">
	<div class="input-group mb-3 col-md-6">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NIS</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Jurusan</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group">
 
  <input type="file" class="form-control" id="gambar" aria-label="Upload">
  
  
</div>
</div>
	<br><br>
		<ul>
			<li>
				<center><button class="w-50 btn btn-lg btn-success" type="submit" name="submit">Tambah Data!</button></center>
			</li>
		</ul>
        </form>
    </body>
</html>