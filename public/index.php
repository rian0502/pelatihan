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
        if ($value == 0) {
            return 0;
        }
        return ($value + 1) * $value / 2;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menghitung f(N)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="contaiener mt-5">
        <form method="get">
            <div class="row">
                <div class="col-6 mb-3">
                    <input type="number" class="form-control" name="angka" id="angka" min="0">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if (isset($_GET['angka'])) : ?>
            <div class="row">
                <div class="col-6">
                    <h1>Fungsi pertama <?= pertama($angka); ?></h1>
                    <h1>Fungsi kedua <?= kedua($angka); ?></h1>
                </div>
                <div class="col-6">
                    <h1>Fungsi Pertama Big O(<?= $angka != 0 ? $angka : 1; ?>)</h1>
                    <h1>Fungsi Kedua Big O(<?= 1 ?>)</h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>