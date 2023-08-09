<?php


function kedua($value){
    return ($value + 1) * $value/2;
}
function pertama($value){
    $sum = 0;
    for ($i=1; $i <= $value; $i++) {
        $sum += $i;
    }
    return $sum;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelatihan 01</title>
</head>
<body>
    <h1>Fungsi pertama <?=  pertama(6); ?></h1>
    <h1>Fungsi optimasi <?=  kedua(6); ?></h1>
</body>
</html>