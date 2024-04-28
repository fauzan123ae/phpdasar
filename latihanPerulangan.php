<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
</head>
<body>
    <h2>Latihan Perulangan</h2>

    <?php
    // Menentukan tinggi segitiga
    $tinggi = 10;

    // Menampilkan segitiga siku-siku
    for ($i = 1; $i <= $tinggi; $i++) {
        // Menampilkan bintang
        for ($j = 1; $j <= $i; $j++) {
            echo "<b>*</b>";
        }
        // Pindah baris
        echo "<br>";
    }
    ?>
</body>
</html>
