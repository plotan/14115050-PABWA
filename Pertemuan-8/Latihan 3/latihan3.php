<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Faktorial</title>
</head>

<body>
    <label>Mencari nilai faktorial</label>
    <form action="" method="POST" class="form-inline">
        <div class="form-group mb-2">
            <label for="faktorial">Nilai : </label>
            <input type="text" placeholder="Masukkan Nilai" id="faktorial" name="faktorial" class="form-control" required="requered">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit" id="submit">Hitung</button>
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $faktorial = 1;
    $faktor = $_POST['faktorial'];
    for ($i = $faktor; $i > 1; $i--) {
        $faktorial = $i * $faktorial;
    }
    echo "<br>Nilai Faktorial dari " . $faktor . "! adalah : " . $faktorial;
}
?>