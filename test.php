<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP algus</title>
</head>
<body>
<?php
echo "<h1>Tere hommikust</h1>";
$tekst="Täna on esimene PHP tund";
echo $tekst;
echo "<br>";
echo "<h2>Matemaatika tehed.Mõistatus</h2>";
echo "<h3>Arva ära kaks arvu</h3>";
$arv1=8;
$arv2=4;
//kahe arvude liitmine +
echo "Kui liidame kokku, vaatus on ".($arv1+$arv2);
//jagamine
echo "<br>";
echo "Kui esimene arv jagame teise arvuga, siis vaastus ".($arv1/$arv2);
?>
<footer>
    <?php
    echo "tänane kuupäev ".date("d.m.y");
    echo "<br>";
    echo "kell ".date("H: I: s");


    ?>


</footer>
</body>
</html>


