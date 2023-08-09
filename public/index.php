<?php
if (isset($_GET['angka'])) {
    $angka = $_GET['angka'];

    function pertama($value)
    {
        if ($value == 0) {
            return 0;
        }
        $sum = 0;
        for ($i = 1; $i <= $value; $i++) {
            $sum += $i;
        }
        return $sum;
    }
    function kedua($value)
    {
        if($value == 0){
            return 0;
        }
        return ($value + 1) * $value / 2;
    }
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

<form method="get">
    <input type="number" name="angka" id="angka">
    <button type="submit">Submit</button>
</form>

<?php if (isset($_GET['angka'])) : ?>
    <h1>Fungsi pertama <?= pertama($angka); ?></h1>
    <h1>Fungsi kedua <?= kedua($angka); ?></h1>
    <h1>Fungsi Pertama Big O(<?= $angka != 0 ? $angka : 1; ?>)</h1>
    <h1>Fungsi Kedua Big O(<?= 1 ?>)</h1>
<?php endif; ?>
</body>

</html>