<?php
// variabel dalam php
$txt = "Selamat Datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi Variabel txt adalah: $txt</p>";
echo "<p>isi Variabel x adalah: $x</p>";
echo "<p>isi Variabel y adalah: $y</p>";
echo "Belajar PHP di" . $txt2 . "<br>";
echo $x + $y;

// PHP konstanta
define("nama_konstanta", "Fauzan F.Z");
echo "<br>".nama_konstanta;

?>