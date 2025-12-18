<?php
$mahasiswa = array(
    'nama' => "Muhammad Ammar Zayyad Rizki",
    'prodi' => 'RPLA', 
    'fakultas' => 'FIT',
    'sisa_uang' => 10000000, 
    'hutang_perpustakaan' => false,
    'ipk' => 3.69
);

foreach ($mahasiswa as $atribut => $mahasigma) {
    echo "$atribut adalah: $mahasigma\n";
};

$jumlah_sks = 20;
$harga_per_sks = 150000;

$total_bayar = $jumlah_sks * $harga_per_sks;
$mahasiswa["sisa_uang"] -= $total_bayar;

echo "\nSisa uang yang dimiliki abis bayar sks: {$mahasiswa['sisa_uang']}";
echo "\n" . cekKeuangan($mahasiswa);
echo "\n" . lolosKRS($mahasiswa);

function cekKeuangan ($array) {
    if ($array['sisa_uang'] > 0) {
        return "Lunas, bisa ambil KRS";
    } else {
        return "Ditolak, uang kurang!";
    }
}

function lolosKRS ($array) {
    if ($array['sisa_uang'] > 0) {
        if ($array['ipk'] > 3.0 || $array['hutang_perpustakaan'] == false) {
            return "Lolos verifikasi KRS";
        }
    } else {
        return "Tidak LOLOS verifikasi KRS";
    }
}
?>