<?php
//Ülesanne 3, Martin Kotkamäe, 01.12.2020
$alus1 = $_GET["alus1"];
$alus2 = $_GET["alus2"];
$korgus = $_GET["korgus"];
$rombikulg = $_GET["rombikulg"];

$trapetsiS = round((($alus1+$alus2)/2)*$korgus,1);
$rombiP = round($rombikulg*4,1);

echo "Trapetsi pindala on: ".$trapetsiS."<br>";
echo "Rombi ümbermööt on: ".$rombiP;
?>