<!--Ülesanne 5 riigid, Martin Kotkamäe, 09.12.2020-->
<?php
$riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
    "Philippines","Canada","Philippines","South Sudan","Brazil",
    "Democratic Republic of the Congo","Indonesia","Syria","Sweden",
    "Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
    "Kazakhstan","Cuba","Portugal","Czech Republic");

$suurim = 0;

foreach ($riigid as $riik) {
    if (strlen($riik) > $suurim) {
        $suurim = strlen($riik);
        $suurimriik = $riik;
    }
}

echo "Pikkima nimega riik on: ",$suurimriik;
?>