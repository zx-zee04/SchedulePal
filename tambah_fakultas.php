<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/input.css">
    <title>Document</title>
</head>
<body>
    <?php
    require 'templates/sidebar.php';
    ?>
    <div class="content">
        <div class="header">
            <h1>Tambah Fakultas</h1>
            <a href="fakultas.php">
                <button>Kembali</button>
            </a>
        </div>
        <form action="" method="post" class="form-input">
            <input type="number" placeholder="ID Fakultas">
            <input type="text" placeholder="Nama Fakultas">
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>