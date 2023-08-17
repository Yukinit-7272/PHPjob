<?php

define ("TAX", 1.1);

$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];
    foreach ($products as $key => $Value) {
        echo $key. "の税込価格は". getPrice($Value). "円です". "<br>";
}

function getPrice ($price) {
    $total = $price * TAX;
    return $total;
}
?>

