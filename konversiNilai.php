<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post">
        Masukkan nilai angka: <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Memproses form saat dikirim
    if(isset($_POST['submit'])) {
        // Mengambil nilai dari form
        $nilai = $_POST['nilai'];

        // Memastikan nilai yang dimasukkan adalah angka
        if (is_numeric($nilai)) {
            // Konversi nilai angka ke huruf sesuai aturan
            if ($nilai >= 90 && $nilai <= 100) {
                $nilai_huruf = 'A';
            } elseif ($nilai >= 80 && $nilai < 89) {
                $nilai_huruf = 'AB';
            } elseif ($nilai >= 70 && $nilai < 79) {
                $nilai_huruf = 'B';
            } elseif ($nilai >= 60 && $nilai < 69) {
                $nilai_huruf = 'BC';
            } elseif ($nilai >= 0 && $nilai < 59) {
                $nilai_huruf = 'C';
            } else {
                $nilai_huruf = 'Nilai tidak valid';
            }

            echo "<p>Nilai angka $nilai setara dengan nilai huruf: $nilai_huruf</p>";
        } else {
            echo "<p>Maaf, silakan masukkan nilai angka yang valid.</p>";
        }
    }
    ?>
</body>
</html>
