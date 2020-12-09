<!--Ülesanne 5 firmad, Martin Kotkamäe, 08.12.2020-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 5</title>
</head>
<body>
<form action="ül5firmad.php" method="get">
    Eemalda firma nimi listist <input type="text" name="eemaldus"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>
<?php
echo "<br>";
$firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");

foreach ($firmad as $firma) {
    echo $firma,"<br>";
}
echo "<br>";
echo "Pärast eemaldust: <br>";
echo "<br>";

if(!empty($_GET["eemaldus"])) {
    $eemalda = $_GET["eemaldus"];
    if ($eemalda != "") {
        $firmad = \array_diff($firmad, [$eemalda]);
        foreach ($firmad as $firma) {
            echo $firma,"<br>";
        }
    }
}
?>