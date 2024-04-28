<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Tabungan Ani</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px; /* Padding kiri kanan */
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto; /* Menengahkan kontainer */
            max-width: 600px; /* Maksimum lebar kontainer */
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Pecahan Uang</h2>
    <p>Ani akan mengambil uang tabungan sejumlah Rp. 1.387.500,- di sebuah Bank. Misalkan pada saat itu uang pecahan yang berlaku adalah Rp. 100.000,-; Rp.50.000,-; Rp. 20.000,-; Rp. 10.000,-; Rp. 5.000,-; Rp. 2.000,- dan Rp. 500,-.</p>

    <?php
    // Total uang yang akan diambil Ani
    $jumlah_uang = 1387500;

    // Array untuk menyimpan nilai pecahan uang dan jumlahnya
    $pecahan_uang = array(
        100000 => 0, // Rp. 100.000
        50000 => 0,  // Rp. 50.000
        20000 => 0,  // Rp. 20.000
        10000 => 0,  // Rp. 10.000
        5000 => 0,   // Rp. 5.000
        2000 => 0,   // Rp. 2.000
        500 => 0     // Rp. 500
    );

    // Menghitung banyaknya masing-masing pecahan uang
    foreach ($pecahan_uang as $pecahan => $jumlah) {
        // Menghitung jumlah pecahan uang yang diperlukan
        $jumlah_pecahan = floor($jumlah_uang / $pecahan);
        // Menyimpan jumlah pecahan uang ke dalam array
        $pecahan_uang[$pecahan] = $jumlah_pecahan;
        // Mengurangi jumlah uang yang masih perlu dihitung
        $jumlah_uang -= $jumlah_pecahan * $pecahan;
    }
    ?>

    <!-- Menampilkan hasil dalam tabel berwarna -->
    <table>
        <tr>
            <th>Pecahan Uang</th>
            <th>Jumlah Lembar</th>
        </tr>
        <?php foreach ($pecahan_uang as $pecahan => $jumlah) : ?>
            <tr>
                <td>Rp. <?php echo number_format($pecahan, 0, ",", ".") ?></td>
                <td><?php echo $jumlah ?> lembar</td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
