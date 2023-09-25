<?php

$badword = $_GET ["badword"];
$censored =$_GET ["censored"];

$result = var_dump($badword);

$censored_res = str_replace($censored,'***',$censored);

$censored_wrd = var_dump($censored_res)



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
</body>
</html>