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
            <h1>User Schedule</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Fakultas</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Lokasi</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fakultas</td>
                    <td>Judul</td>
                    <td>Deskripsi</td>
                    <td>Lokasi</td>
                    <td>Waktu</td>
                    <td>Tanggal</td>
                    <td>Status</td>
                </tr>
            </tbody>
        </table>
        <div class="bottom-container">
            <p>Showing 1 of 0</p>
            <div class="pagination">
                <button type="button">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="12"
                    viewBox="0 0 24 24"
                    >
                    <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m14 7l-5 5l5 5"
                    />
                    </svg>
                </button>
                <div>Page 1 of 10</div>
                <button type="button">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="12"
                    viewBox="0 0 24 24"
                    >
                    <g transform="translate(24 0) scale(-1 1)">
                        <path
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m14 7l-5 5l5 5"
                        />
                    </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>
</html>