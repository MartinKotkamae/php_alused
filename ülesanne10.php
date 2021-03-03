<html>
<menu>
    <a href="ülesanne10.php">Avaleht</a>
    <a href="ülesanne9.php">Ulesanne 9</a>
    <a href="ülesanne10.php?sait=ülesanne8">Ulesanne 8</a>
    <a href="ülesanne10.php?sait=ülesanne111">Ulesanne 111</a>
</menu>
</html>
<?php
if(!empty($_GET["sait"])){
    $sait = $_GET["sait"];

    if(is_numeric($sait)){
        include("sait".$sait.'.php');
    }

    $kuiTuhi = array('ülesanne8');
    $check = in_array($sait, $kuiTuhi);

    if($check == true){
        include($sait.'.php');
    } else {
        echo "Sellist lehte pole olemas";
    }
}
?>