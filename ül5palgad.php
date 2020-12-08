<?php
$palgad = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
$palgadkok = 0;
$palgadarv = count($palgad);

foreach ($palgad as $palk) {
    $palgadkok += $palk;
}

echo "2018 a. keskmine palk: ",$palgadkok/$palgadarv;
?>
