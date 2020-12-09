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

<?php
/**

for ($nr = 1; $nr <= 100; $nr++) {
    echo $nr . '<br>';
}

$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
for($nr=0;$nr<count($nimed);$nr++){
    echo $nimed[$nr].'<br>';
}

$arv = 1;
while($arv <=10){
    echo $arv.'<br>';
    $arv++;
}
$number = 1;
do{
    echo $number.'<br>';
    $number++;
} while($number <=10);

for($rida=1; $rida<=5; $rida++){
    for($veerg=1; $veerg<=5; $veerg++){
        echo '*';
    }
    echo '*<br>';
}
**/
?>
