


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ol>
        <?php
        foreach ($mahasiswa as $nama) {
            echo "<li> $nama </li>";
        }
        ?>
    </ol>
    <div>
        copyright&copy;<?php echo date ("Y");?>Program studi Teknik informatika-PNL
    </div>
</body>
</html>


