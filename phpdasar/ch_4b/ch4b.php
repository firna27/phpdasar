<?php

$siswa = [
    ["joni susanto", "XII TKR 2", "Pemalang"],
    ["intan ayu", "XII TB 1", "Brebes"],
    ["salma karima", "XI RPL 1", "Batang"]
];

$n = 1;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border= 1 cellspacing="0" cellpadding="10">


        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
        </tr>

       <?php foreach($siswa as $sw) : ?>
        <tr>
            <td><?= $n++; ?></td>
            <td><?= $sw[0] ?></td>
            <td><?= $sw[1] ?></td>
            <td><?= $sw[2] ?></td>
        </tr>
       <?php endforeach; ?>
    </table>
</body>
</html>