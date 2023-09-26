<?php

$badword = $_GET ["badword"];
$censored =$_GET ["censored"];


$censored_res = str_replace($censored,'***',$badword);
$censored_wrd = strlen($censored_res);


$badword_lgt = strlen($badword);
$censored_lgt = strlen($censored_res);

// $result = var_dump($badword);
// $censored_dump = var_dump($censored_wrd);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Paragrafo Stampato</h2>
    <br>
    <?= $badword ?>
    <p>lunghezza paragrafo : <?=$badword_lgt?></p>
    <br>
    <h2>Paragrafo Censurato</h2>
    <br>
    <?= $censored_res ?>
    <p>lunghezza paragrafo censurato : <?=$censored_lgt?></p>

</body>
</html>