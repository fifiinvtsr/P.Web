<?php
$nilaiNumerik = 92;

if($nilaiNumerik >=90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
} 

echo "<br>";

$jarakSaatIni      = 0;
$jarakTarget       = 500;
$peningkatanHarian = 30;
$hari              = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";
echo "<br>";

$jumlahLahan         = 10;
$tanamanPerlahan     = 5;
$buahPerTanaman      = 10;
$jumlahBuah          = 0;

for($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";
echo "<br>";

$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor ";

echo "<br>";
echo "<br>";

$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach ($nilaiSiswa as $nilai) {
    echo "Nilai: $nilai (Tidak lulus) <br> ";
    continue;
}
echo "Nilai : $nilai (lulus)<br> ";

echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$totalNilai = 0;
$count = count($nilaiSiswa);
for ($i = 2; $i < $count - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i];
}
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";

echo "<br>";
echo "<br>";

$hargaProduk = 120000;
$diskon = 0;
if ($hargaProduk > 100000) {
    $diskon = 0.2; 
}
$totalHarga = $hargaProduk - ($hargaProduk * $diskon);
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($totalHarga, 0, ',', '.');

echo "<br>";
echo "<br>";

$poin = 700; 
$totalSkor = "Total skor pemain adalah: $poin";
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";
echo $totalSkor . PHP_EOL;
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

