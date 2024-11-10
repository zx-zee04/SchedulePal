<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/table.css">
    <title>Document</title>
</head>
<body>
    <?php
    require 'templates/sidebar.php';
    ?>
    <div class="content">
        <div class="header">
            <h1>Requests</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NIM</td>
                    <td>Fakultas</td>
                    <td>Judul</td>
                    <td>Deskripsi</td>
                    <td>Lokasi</td>
                    <td>Waktu</td>
                    <td>Tanggal</td>
                    <td>
                        <a href=""><button></button></a>
                    </td>
                </tr>
            </tbody>
    </div>
</body>
</html>