<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan eror ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan eror ketika key-nya kosong
echo "Halo Fifi {$nama}! Apakah benar anda berusia 21 {$usia} tahun?";
?>