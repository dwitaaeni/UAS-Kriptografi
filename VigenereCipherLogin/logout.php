<?php
session_start();
session_destroy(); // Hapus semua sesi

// Redirect ke halaman login setelah logout
header("Location: home.html");
exit();
?>
