<?php
$roda = 4;
$bahan_bakar = "listrik";

$ramah_lingkungan = ($bahan_bakar == "listrik");

echo "Jumlah roda: $roda<br>";
echo "Bahan bakar: $bahan_bakar<br>";
echo "Ramah lingkungan: " . ($ramah_lingkungan ? "Ya" : "Tidak") . "<br>";

$jenis_kendaraan = ($roda == 2) 
    ? (($bahan_bakar == "bensin") ? "Motor bensin" : (($bahan_bakar == "listrik") ? "Motor listrik" : "Jenis kendaraan tidak diketahui"))
    : (($roda == 4) 
        ? (($bahan_bakar == "bensin") ? "Mobil bensin" : (($bahan_bakar == "listrik") ? "Mobil listrik" : "Jenis kendaraan tidak diketahui"))
        : "Jenis kendaraan tidak diketahui");

echo "Jenis kendaraan: $jenis_kendaraan";
?>