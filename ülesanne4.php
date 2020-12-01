<!--Ülesanne 4, Martin Kotkamäe, 01.12.2020-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 4.2</title>
    <style>
        form {
            margin: 20px;
        }
       input {
            margin: 5px;
       }
       #button {
           margin-top: 10px;
           font-size: 30px;
       }
    </style>
</head>
<body>
<form action="ülesanne4.php" method="get">
    Esimene täisarv <input type="text" name="taisarv1"><br>
    Teine täisarv <input type="text" name="taisarv2"><br>
    <input id="button" type="submit" value="Saada">
</form>
</body>
</html>
<?php

if(!empty($_GET["taisarv1"]) and !empty($_GET["taisarv2"])){
    //
    $taisarv1 = $_GET["taisarv1"];
    $taisarv2 = $_GET["taisarv2"];
    if($taisarv2 == 0){
        echo "Arvuga null ei ole võimalik jagada!"."<br>";
    } else {
        $jagamine = round($taisarv1/$taisarv2,2);
        echo "Kahe sisestatud arvu jagatis on: ".$jagamine."<br>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 4.3</title>
</head>
<body>
<form action="ülesanne4.php" method="get">
    Esimene vanus <input type="text" name="vanus1"><br>
    Teine vanus <input type="text" name="vanus2"><br>
    <input id="button" type="submit" value="Saada">
</form>
</body>
</html>
<?php

if(!empty($_GET["vanus1"]) and !empty($_GET["vanus2"])){
    $vanus1 = $_GET["vanus1"];
    $vanus2 = $_GET["vanus2"];
    //
    if($vanus1 == $vanus2){
        echo "Inimesed on sama vanad"."<br>";
    } if($vanus1 > $vanus2){
        echo "Esimene isik on vanem teisest"."<br>";
    } if($vanus1 < $vanus2){
        echo "Teine isik on vanem esimeset"."<br>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 4.4,4.5</title>
</head>
<body>
<form action="ülesanne4.php" method="get">
    Ristküliku esimene külg <input type="text" name="kulg1"><br>
    Ristküliku teine külg <input type="text" name="kulg2"><br>
    <input id="button" type="submit" value="Saada">
</form>
</body>
</html>
<?php

if(!empty($_GET["kulg1"]) and !empty($_GET["kulg2"])){
    $kulg1 = $_GET["kulg1"];
    $kulg2 = $_GET["kulg2"];
    //
    if($kulg1 == $kulg2){
        echo "Ristkülik on ruut!"."<br>";
    } if($kulg1 > $kulg2){
        echo "Kujund on ristkülik"."<br>";
    } if($kulg1 < $kulg2){
        echo "Kujund on ristkülik"."<br>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 4.6</title>
</head>
<body>
<form action="ülesanne4.php" method="get">
    Sisestage oma vanus: <input type="text" name="omavanus"><br>
    <input id="button" type="submit" value="Saada">
</form>
</body>
</html>
<?php

if(!empty($_GET["omavanus"])){
    $omavanus = $_GET["omavanus"];
    $checkjuubel = $omavanus[-1];
    //
    if($checkjuubel[-1] == "5" or $checkjuubel[-1] == "0") {
        echo "Tegemist on juubliga!"."<br>";
    } else {
        echo "Kahjuks teil pole juubel!"."<br>";
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 4.7</title>
</head>
<body>
<form action="ülesanne4.php" method="get">
    Sisestage oma KT puntkide arv: <input type="text" name="punktid"><br>
    <input id="button" type="submit" value="Saada">
</form>
</body>
</html>
<?php
$tubli = 10;
$tehtud = 5;

if(!empty($_GET["punktid"])){
    $punktid = $_GET["punktid"];

    switch ($punktid){
    case ($punktid>$tubli): echo "SUPER TULEMUS!";
    break;
    case ($punktid<$tubli and $punktid>=$tehtud): echo "TEHTUD!";
    break;
    case ($punktid<$tehtud): echo "KASIN!";
    break;
    default: echo "SISESTA OMA PUNTKID";
    }
} else {
    echo "SISESTA OMA PUNTKID";
}
?>
