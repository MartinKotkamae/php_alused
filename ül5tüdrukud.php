<!--Ülesanne 5 Tüdrukud 1 ja 2, Martin Kotkamäe, 08.12.2020-->
<?php
$tudrukud = array("keela","aala","teela","tuula","muula","eela","oola","hola");
sort($tudrukud);

foreach ($tudrukud as $tudruk){
    echo "$tudruk <br>";
}

echo "Esimesed kolm tüdrukut on: $tudrukud[0],$tudrukud[1],$tudrukud[2]<br>";

$viimane = count($tudrukud);
echo "Viimane tüdruk on: ",$tudrukud[$viimane - 1],"<br>";

$suvaline = rand(0,$viimane-1);
echo "Suvaline nimi listist: ",$tudrukud[$suvaline];
?>
