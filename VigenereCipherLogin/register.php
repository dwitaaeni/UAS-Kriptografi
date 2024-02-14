<?php
// Import koneksi database
include('koneksi.php');

$registrationMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strtoupper($_POST["username"]);
    $password = strtoupper($_POST["password"]);

    // Enkripsi kata sandi dengan Vigenere Cipher (Anda harus mengganti ini dengan algoritma enkripsi yang lebih aman)
    $encrypted_password = vigenere_encrypt($password, "PELITA");

    // Simpan data pengguna ke dalam database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$encrypted_password')";

    if ($conn->query($sql) === TRUE) {
        $registrationMessage = "Registrasi berhasil.";
    } else {
        $registrationMessage = "Error: " . $sql . "<br>" . $conn->error;
    }
}

function vigenere_encrypt($text, $key) {
    $text = strtoupper($text); // Ubah teks ke huruf kapital
    $key = strtoupper($key);   // Ubah kunci ke huruf kapital
    $encrypted_text = '';

    $text_length = strlen($text);
    $key_length = strlen($key);

    for ($i = 0; $i < $text_length; $i++) {
        $text_char = ord($text[$i]);
        $key_char = ord($key[$i % $key_length]);

        if (ctype_alpha($text[$i])) {
            // Enkripsi hanya dilakukan untuk huruf alfabet
            $encrypted_char = chr(((($text_char - 65) + ($key_char - 65)) % 26) + 65);
            $encrypted_text .= $encrypted_char;
        } else {
            // Tidak perlu mengenkripsi karakter selain huruf alfabet
            $encrypted_text .= $text[$i];
        }
    }

    return $encrypted_text;
}
?>

<!-- ... (existing HTML code remains unchanged) ... -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 300px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: #4CAF50;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .message {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <div class="message"><?php echo $registrationMessage; ?></div>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <center><input type="submit" value="Daftar"></center>
            <p>Sudah punya akun? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>
