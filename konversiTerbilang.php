<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka menjadi Terbilang</h2>
    <form method="post">
        Masukkan angka (1-9): <input type="number" name="angka" min="1" max="9"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    // Array asosiatif untuk mengkonversi angka menjadi terbilang
    $terbilang_angka = array(
        1 => "satu",
        2 => "dua",
        3 => "tiga",
        4 => "empat",
        5 => "lima",
        6 => "enam",
        7 => "tujuh",
        8 => "delapan",
        9 => "sembilan"
    );

    // Memproses form saat dikirim
    if(isset($_POST['submit'])) {
        // Mengambil nilai dari form
        $angka = $_POST['angka'];

        // Memeriksa apakah angka ada dalam array terbilang_angka
        if (array_key_exists($angka, $terbilang_angka)) {
            // Jika ada, ambil nilai terbilang dari array
            $terbilang = $terbilang_angka[$angka];
            // Menampilkan hasil konversi
            echo "<p>Angka = $angka</a>";
            echo "<p>dikonversi menjadi: $terbilang</p>";
        } else {
            // Jika tidak, tampilkan pesan error
            echo "<p>Maaf, hanya bisa mengkonversi angka dari 1 hingga 9.</p>";
        }
    }
    ?>
</body>
</html>
