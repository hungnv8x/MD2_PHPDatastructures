<?php
include_once "Dance.php";
include_once "SquareDance.php";

$dance1 = new Dance("Hung", "MALE");
$dance2 = new Dance("Nam", "MALE");
$dance3 = new Dance("Hoang", "MALE");
$dance4 = new Dance("Linh", "FEMALE");
$dance5 = new Dance("My", "FEMALE");
$dance6 = new Dance("Hoa", "FEMALE");

$squareDance = new SquareDance();
$squareDance->addDance($dance1);
$squareDance->addDance($dance2);
$squareDance->addDance($dance3);
$squareDance->addDance($dance4);
$squareDance->addDance($dance5);
$squareDance->addDance($dance6);

echo $squareDance->pairDance();
?>
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
<form>

</form>
</body>
</html>
