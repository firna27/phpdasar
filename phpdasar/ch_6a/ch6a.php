<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_siswa");

// ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM tb_siswa");

// ambil data (fetch) db_siswa dari object result
//mysqli_fecth_row() //mengembalikan array numerik
//mysqli_fecth_assoc()//mengembalikan array associative
//mysqli_fecth_array()//mengembalikan keduanya
//mysqli_fecth_object() 

//while($siswa = mysqli_fetch_assoc($result));{
    // var_dump($siswa);
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar siswa</h1>

<table border="1" cellpadding="10" cellspacing="1" >
<tr>
    <th>No.</th>
    <th>aksi</th>
    <th>Gambar </th>
    <th>NISN</th>
    <th>Nama</th>
    <th>Email</th>
    <th>jurusan</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result) ): ?>

<tr>
    <td>1</td>
    <td>    
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/<?php echo $row["gambar"]; ?>" width="50px"></td>
    <td>20,5391</td>
    <td>Firna Maftukhah</td>
    <td>firnamaftukhah2756@gmail.com</td>
    <td>RPL</td>
</tr>

<?php endwhile;?>

</table>
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
 </body>
</html>