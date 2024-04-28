<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <h2>Soal 1</h2>
    <p>Setiap bulan, Gaji pokok yang diterima Obi sebesar Rp. 3.250.000,-, tunjangan
    jabatan sebesar Rp. 1.200.000,- dan pajaknya penghasilan sebesar 10%
    dihitung dari gaji kotor (gaji kotor = gaji pokok + tunjangan).</p>

    <?php
    // Mendefinisikan gaji pokok dan tunjangan jabatan
    $gaji_pokok = 3250000;
    $tunjangan_jabatan = 1200000;

    // Menghitung gaji kotor
    $gaji_kotor = $gaji_pokok + $tunjangan_jabatan;

    // Menghitung pajak penghasilan (15% dari gaji kotor)
    $pajak = 0.10 * $gaji_kotor;

    // Menghitung gaji bersih
    $gaji_bersih = $gaji_kotor - $pajak;

    // Menampilkan hasil
    echo "<p>Gaji Pokok: Rp. " . number_format($gaji_pokok, 0, ",", ".") . ",-</p>";
    echo "<p>Tunjangan Jabatan: Rp. " . number_format($tunjangan_jabatan, 0, ",", ".") . ",-</p>";
    echo "<p>Gaji Kotor: Rp. " . number_format($gaji_kotor, 0, ",", ".") . ",-</p>";
    echo "<p>Pajak: Rp. " . number_format($pajak, 0, ",", ".") . ",-</p>";
    echo "<p>Gaji Bersih: Rp. " . number_format($gaji_bersih, 0, ",", ".") . ",-</p>";
    ?>
</body>
</html>
