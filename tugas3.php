<?php
$data = array("Laptop", "Smartphone", "Tablet", "Smartwatch", "Headphone");

// is_array()
if (is_array($data)) {
    echo "Ini adalah array<br>";
}

// count()
echo "Jumlah data: " . count($data) . "<br><br>";

// sort()
sort($data);
echo "Setelah sort:<br>";
print_r($data);
echo "<br><br>";

// shuffle()
shuffle($data);
echo "Setelah shuffle:<br>";
print_r($data);
?>