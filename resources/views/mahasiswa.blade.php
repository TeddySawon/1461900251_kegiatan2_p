<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="/bootstrap/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Css -->
        <link rel="stylesheet" href="/resources/css/home-style.css">

        <title>Data</title>
    </head>

    <body>
        <?php
        $output = "SELECT *
            FROM mahasiswa
            INNER JOIN matkul
            ON mahasiswa.nbi = matkul.nbi
            ORDER BY mahasiswa.nbi"
        ?>
        <script src="/bootstrap/bootstrap-5.0.0-beta3-dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>