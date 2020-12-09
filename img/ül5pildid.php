<!--Ülesanne 5 Pildid, Martin Kotkamäe, 09.12.2020-->
<?php
$pildid = array("prentice.jpg","freeland.jpg","peterus.jpg","devlin.jpg","gabriel.jpg","pete.jpg");


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Ülesanne 5</title>
    <style>
        body {
            margin: 20px 20px;
        }
        .yeet {
            display: flex;
        }
    </style>
</head>
<body>
<p>Kolmas pilt: </p>
<img src="<?php echo $pildid[2] ?>" alt="kolmaspilt"><br>
<p>Kõik array pildid: </p>
<?php
$dir1 = "img";
foreach ($pildid as $pilt) {
    echo '<img src="' . $pilt . '" alt="">';
}
?>
<p>Kõik array pildid kuues veerus: </p>
<?php
$dir1 = "img";
foreach ($pildid as $pilt) {
    echo '<img class="yeet" src="' . $pilt . '" alt="">';
}
?>

</body>
</html>