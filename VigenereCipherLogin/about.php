<?php
// Simulasi data tim
$team_members = [
    ['name' => 'John Doe', 'role' => 'Designer', 'image' => 'https://placekitten.com/150/150'],
    ['name' => 'Jane Doe', 'role' => 'Developer', 'image' => 'https://placekitten.com/150/150'],
    ['name' => 'Chris Smith', 'role' => 'Content Writer', 'image' => 'https://placekitten.com/150/150'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman About</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #343a40;
    }

    header {
      background-color: #343a40;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #495057;
      padding: 10px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
      font-size: 18px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffc107;
    }

    section {
      padding: 20px;
      text-align: center;
    }

    h2 {
      color: #343a40;
    }

    p {
      color: #495057;
      font-size: 16px;
    }

    .team-info {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-top: 30px;
    }

    .team-member {
      text-align: center;
      max-width: 300px;
      margin: 0 20px 20px;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .team-member img {
      max-width: 100%;
      height: auto;
      border-radius: 50%;
      margin-bottom: 15px;
    }

    footer {
      background-color: #343a40;
      color: white;
      padding: 10px 0;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <header>
    <h1>Halaman About</h1>
  </header>

  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="register.php" class="cta-button">Registrasi</a>
    <a href="login.php" class="cta-button">Login</a>
  </nav>

  <section>
    <h2>Tentang Kami</h2>
    <p>Website ini dikembangkan oleh tim yang berdedikasi un
