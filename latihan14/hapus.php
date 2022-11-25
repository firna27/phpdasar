<?php 
require 'function.php';

$id = $_GET["id"];
if( hapus($id) > 0 ) {
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
?>