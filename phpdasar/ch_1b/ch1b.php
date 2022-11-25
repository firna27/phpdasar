<?php

$nilai = "70";

if ($nilai >89) {
    $ket = "Sangat Baik";
} else if ($nilai >79) {
    $ket = "Baik";
} else if ($nilai >69) {
    $ket = "Cukup";
} else if ($nilai >69) {
    $ket = "Cukup";
} else {
    $ket = "kurang";
}

echo ("Nilai anda ".$nilai.", Keterangan ".$ket);

?>