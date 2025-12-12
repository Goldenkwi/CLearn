<?php
$Namaku = "Muhammad Ammar Zayyad Rizki";
$umurku = 18;
$sisa_uangku = 18000;
$udah_makan_belum = true;
$hobi = ["main game", "ngoding", "makan"];

echo "Yo ma chigga namaku: " . $Namaku . "<br>";
echo $umurku ."<br>";
echo $sisa_uangku . "<br>";

if ($udah_makan_belum) {
    echo "Udah kenyang" . "<br>";
} else {
    echo "Masih laper;" . "<br>";
}

echo $hobi[1];
?>