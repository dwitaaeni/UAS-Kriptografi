<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Beranda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        header {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: center;
        }
        main {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Halaman Beranda</h1>
    </header>

    <main>
        <p>Ini adalah halaman beranda sederhana menggunakan PHP.</p>

        <?php
        // Contoh penggunaan PHP di dalam halaman
        $nama_pengguna = "Pengguna";
        echo "<p>Selamat datang, $nama_pengguna!</p>";
        ?>

        <p>Anda dapat menambahkan lebih banyak konten di halaman ini sesuai kebutuhan Anda.</p>
    </main>
</body>
</html>
