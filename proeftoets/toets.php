<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include 'classes/Abstractwinkelwagen.php';
include 'classes/Drink.php';
include 'classes/Food.php';
include 'classes/Winkelwagen.php';

$winkelwagen = new Winkelwagen('blue');

$drink1 = new Drink('melk' , 'zuivel', 1.49,1);
$drink2 = new Drink('cola' , 'frisdrank', 2.69,5);
$drink3 = new Drink('fristi' , 'zuivel', 1.49,369);

$winkelwagen->adddrink($drink1);
$winkelwagen->adddrink($drink2);
$winkelwagen->adddrink($drink3);

$winkelwagen->addfood(new Food('croissant', 'brood',0.39));
$winkelwagen->addfood(new Food('danoontje', 'zuivel',1.39));
$winkelwagen->addfood(new Food('zalm', 'vis',5.39));
$winkelwagen->addfood(new Food('frikandelbroodje', 'snacks',1.29));

$winkelwagen->printProducts();
$winkelwagen->getNumberOfProducts();
?>
</body>
</html>
