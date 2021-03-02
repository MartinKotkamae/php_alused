<!--Ülesanne 6.1, Martin Kotkamäe, 09.12.2020-->
<?php
for ($nr = 1; $nr <= 100; $nr++) {
    echo $nr.". ";
    if ($nr % 10 == 0 ) {
        echo "<br>";
    }
}
echo "<br>";
?>
<!--Ülesanne 6.2/3/4, Martin Kotkamäe, 09.12.2020-->
<?php
for ($nr = 1; $nr <= 10; $nr++) {
    echo "*";
}
for ($nr = 1; $nr <= 10; $nr++) {
    echo "*"."<br>";
}
for ($nr = 1; $nr <= 5; $nr++) {
    for ($nr2 = 1; $nr2 <= 5; $nr2++) {
        echo "*";
    }
    echo "<br>";
}
?>
<!--Ülesanne 6.5, Martin Kotkamäe, 09.12.2020-->
<?php
for ($nr = 10; $nr >= 1; $nr--) {
    echo $nr."<br>";
}
?>
<!--Ülesanne 6.6, Martin Kotkamäe, 02.03.2021-->
<?php
for ($nr = 3; $nr <= 100; $nr += 3) {
    echo $nr."<br>";
}
?>
<!--Ülesanne 6.7, Martin Kotkamäe, 09.12.2021-->
<?php
$poiss = array(1=> 'Tali', 'Tuli', 'Tilo');
$tudruk = array(1=> 'Kristin','Kriev','Kriss');

$kp = count($poiss);
$kt = count($tudruk);

for($nr=1;$nr<=$kp;$nr++){
    if($nr<$kp-2){
        continue;
    }
    echo $poiss[$nr].' '.$tudruk[$nr].'<br>';
}
?>