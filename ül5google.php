<!--Ülesanne 5 Google, Martin Kotkamäe, 09.12.2020-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ulesanne 5</title>
</head>
<body>
<form action="ül5google.php" method="get">
    Otsi nime listist: <input type="text" name="otsinimi"><br>
    <input type="submit" value="Saada">
</form>
</body>
</html>

<?php
$gnimed = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","
Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
    "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
    "Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
    "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");
echo "<br>";
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
    </style>
</head>
<body>
<div class="alert alert-primary" role="alert">
    <?php
    if(!empty($_GET["otsinimi"])) {
        $otsinimi = $_GET["otsinimi"];
        if (in_array($otsinimi, $gnimed)) {
            echo $otsinimi," nimi on listis!";
        } else {
            echo "Nime pole listis!";
        }
    }
    ?>
</div>
</body>
</html>
