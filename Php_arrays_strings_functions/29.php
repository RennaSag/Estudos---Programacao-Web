<?php
$array1 = array();
$array2 = array();

for ($i = 0; $i < 50; $i++) {
    $array1[$i] = rand(0, 1000);
    $array2[$i] = rand(0, 1000);
}

$array3 = array_merge($array1, $array2);
sort($array3);

foreach ($array3 as $valor) {
    echo $valor . "<br>";
}
?>
