<?php
$roda = 4;
$bahan_bakar = "listrik";

$ramah_lingkungan = ($bahan_bakar == "listrik");

echo "Jumlah roda: $roda<br>";
echo "Bahan bakar: $bahan_bakar<br>";
echo "Ramah lingkungan: " . ($ramah_lingkungan ? "Ya" : "Tidak") . "<br>";

if ($roda == 2) {
    if ($bahan_bakar == "bensin") {
        echo "Jenis kendaraan: Motor bensin";
    } elseif ($bahan_bakar == "listrik") {
        echo "Jenis kendaraan: Motor listrik";
    } else {
        echo "Jenis kendaraan tidak diketahui";
    }
} elseif ($roda == 4) {
    if ($bahan_bakar == "bensin") {
        echo "Jenis kendaraan: Mobil bensin";
    } elseif ($bahan_bakar == "listrik") {
        echo "Jenis kendaraan: Mobil listrik";
    } else {
        echo "Jenis kendaraan tidak diketahui";
    }
} else {
    echo "Jenis kendaraan tidak diketahui";
}
?>