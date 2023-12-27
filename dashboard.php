<?php
session_start();

// Memeriksa apakah ada sesi user_id dan role yang tersimpan
if (isset($_SESSION['user_id']) && isset($_SESSION['role'])) {
    $role = $_SESSION['role'];

    // Redirect ke halaman sesuai dengan peran (role) pengguna
    if ($role === 'admin') {
        header('Location: dashboard/dashboard_admin.php');
        exit();
    } elseif ($role === 'dokter') {
        header('Location: dashboard_dokter.php');
        exit();
    } elseif ($role === 'pasien') {
        header('Location: dashboard_pasien.php');
        exit();
    }
} else {
    // Jika tidak ada sesi, kembalikan ke halaman login atau halaman lain yang sesuai
    header('Location: login.php');
    exit();
}
?>
