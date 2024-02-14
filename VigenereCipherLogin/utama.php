<?php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: home.html"); // Jika tidak, arahkan ke halaman login
    exit();
}

// Tampilkan pesan selamat datang jika ada
$welcomeMessage = isset($_SESSION['welcome_message']) ? $_SESSION['welcome_message'] : '';
unset($_SESSION['welcome_message']); // Hapus pesan setelah ditampilkan

// Lanjutkan dengan tampilan halaman utama
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Puskesmas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 2px;
            text-align: left; /* Align header text to the left */
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: right; /* Align navigation links to the right */
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    
</head>
<body>

<?php
    include 'functions.php'; // Memasukkan file fungsi
?>

    <header>
        <h1><?php echo getPuskesmasName(); ?></h1>
        <nav>
            <ul>
                <li><a href="beranda.php"><?php echo getMenuLink("Beranda"); ?></a></li>
                <li><a href="#"><?php echo getMenuLink("Pelayanan"); ?></a></li>
                <li><a href="#"><?php echo getMenuLink("Dokter"); ?></a></li>
                <li><a href="#"><?php echo getMenuLink("Kontak"); ?></a></li>
            </ul>
        </nav>
    </header>

    <section id="content">
        <h2>Selamat datang di <?php echo getPuskesmasName(); ?></h2>
        <p><?php echo getWelcomeMessage(); ?></p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo getPuskesmasName(); ?></p>
    </footer>

</body>
</html>

