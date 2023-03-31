<?php

$sumber = 'https://tifupb.id/21a3';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-3">DATA KEHADIRAN </h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <?php foreach ($data as $row) {
                #code..

            ?><div class="card mt-3" style="width: 25rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NO   : <?php echo $row['NO']?></li>
                        <li class="list-group-item">NIM  : <?php echo $row['NIM']?></li>
                        <li class="list-group-item">NAMA : <?php echo $row['NaMa']?></li>
                        <li class="list-group-item">MINGGU KE-1 : <?php echo $row['1']?></li>
                        <li class="list-group-item">MINGGU KE-2 : <?php echo $row['2']?></li>
                        <li class="list-group-item">MINGGU KE-3 : <?php echo $row['3']?></li>
                    </ul>
                </div>

            <?php } ?>

        </div>
    </div>





</body>

</html>