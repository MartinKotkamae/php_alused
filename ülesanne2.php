<?php
//Ülesanne 2, Martin Kotkamäe, 01.12.2020
$x = 100;
$y = 5;
$Liitmine = ($x.'+'.$y.'='.($x+$y));
$Lahutamine = ($x.'-'.$y.'='.($x-$y));
$Korrutamine = ($x.'*'.$y.'='.($x*$y));
$Jagamine = ($x.'/'.$y.'='.($x/$y));
$Jaak = ($x.'%'.$y.'='.($x%$y));

$Millimeetrid = 58743;
$Teisendus = round($Millimeetrid/10,2)."cm"."<br>".round($Millimeetrid/1000,2)."m";

echo $Liitmine."<br>";
echo $Lahutamine."<br>";
echo $Korrutamine."<br>";
echo $Jagamine."<br>";
echo $Jaak."<br>"."<br>";

echo $Millimeetrid."mm"."<br>";
echo $Teisendus."<br>"."<br>";

$a = 59;
$b = 84;
$hupotenuus = 106;

$pindala = round(($a+$b)/2,0);
echo $pindala." ühikut ruudus";
?>
