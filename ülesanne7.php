<!--Ülesanne 7.Tervitus, Martin Kotkamäe, 09.12.2021-->
<?php
function tervitus(){
    return "Tere päiksekesekene!";
}
echo tervitus();
echo "<br>";
?>
<!--Ülesanne 7.Liitu Uudiskirjaga, Martin Kotkamäe, 09.12.2021-->
<?php
function uudiskirivorm(){
    ?>
    <form method="post" action="">
        <input type="text" name="name"/>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
}
echo uudiskirivorm();
echo"<br>";
?>
<!--Ülesanne 7.Kasutajanimi ja email, Martin Kotkamäe, 09.12.2021-->
<?php
function vaikeseks($kasutaja = "Martin Kotkamae"){
    return strtolower($kasutaja);
}
echo vaikeseks();
echo "<br>";

function emaililopp($kasutaja2 = "martinkotkamae"){
    return $kasutaja2."hkhk.edu.ee";
}
echo emaililopp();
echo "<br>";

function kood($pikkus){
    $suvalisedchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz1234567890#()?%!/";
    return substr(str_shuffle($suvalisedchar), 0, $pikkus);
}
echo kood(7);
echo "<br>";
?>
<!--Ülesanne 7.Arvud, Martin Kotkamäe, 09.12.2021-->
<?php
function arvuvahe($samm){
    $kasutajaarv1 = 2;
    $kasutajaarv2 = 12;
    while ($kasutajaarv1 <= $kasutajaarv2) {
        echo $kasutajaarv1;
        echo "<br>";
        $kasutajaarv1 += $samm;
    }
}

echo arvuvahe(2);
echo "<br>";
?>
<!--Ülesanne 7.Ristküliku pindala, Martin Kotkamäe, 09.12.2021-->
<?php
function rkpindala($laius, $pikkus){
    $pindala = $laius * $pikkus;
    return $pindala;
}
echo "Pindala : ".rkpindala(2, 3);
echo"<br>";
?>
<!--Ülesanne 7.Isikukood, Martin Kotkamäe, 09.12.2021-->
<?php
function isikpikkus($isikukood){
    if (strlen ($isikukood) == 11) {
        echo "Isikukoodil on oige pikkus";
    } else {
        echo "Isikukood on vale pikkusega";
    }
}

echo isikpikkus(37605030299);
echo "<br>";
echo isikpikkus(376050302999);
echo "<br>";

function sugusunn($isikukood) {
    $sunnikuupaev = substr($isikukood,1,6);
    if (empty($isikukood)){
        echo "Sisestage isikukood";
    }
    elseif (substr($isikukood,0,1) == 5){
        echo "Sugu: Mees, Sunnikuupaev: ".$sunnikuupaev;
    } else {
        echo "Sugu: Naine, Sunnikuupaev: ".$sunnikuupaev;
    }

}
echo sugusunn(50005186520);
echo "<br>";
?>
<!--Ülesanne 7.Head mötted, Martin Kotkamäe, 09.12.2021-->
<?php
function lause(){
    $alus = array("Poiss","Tüdruk","Kass");
    $oeldis = array("jookseb", "huppab", "magab");
    $sihitis = array("rannas", "metsas", "linnas");
    echo $alus[rand(1, 3)];
    echo " ";
    echo $oeldis[rand(1, 3)];
    echo " ";
    echo $sihitis[rand(1, 3)];
}

echo lause();
echo "<br>";
?>
