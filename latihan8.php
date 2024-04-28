<?php

// data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);

// menampilkan data array
print_r($array);
// menampilkan kelas 1D
print_r($array['1D']);
// menampilkan kelas 1D dengan index 0 
echo $array['1D'][0];
// menampilkan Fajri
echo $array['1D'][1];
// menampilkan Andi 
echo "<br>Andi tidak ada di kelas 1D<br>";

// data kelas bisa ditulis juga dengan notasi yang lebih sederhana
$array_simple = [
    "1C" => ["Udin", "Ismail", "Adi"],
    "1D" => ["Lukman", "Fajri", "Mahmud"]
];
?>