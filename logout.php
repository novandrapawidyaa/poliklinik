<!-- logout.php -->
<?php
session_start();

// Hapus semua data session
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit();
?>