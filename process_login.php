<?php
session_start();

// Sambungkan ke database
$conn = mysqli_connect('localhost', 'root', '', 'poli');

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cek kecocokan data login di database
$query = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    $role = $row['role'];
    $redirect_url = '';

    if ($role === 'admin') {
        $redirect_url = 'index.php';
    } elseif ($role === 'dokter') {
        $redirect_url = 'index.php';
    } elseif ($role === 'pasien') {
        $redirect_url = 'index.php';
    }

    // Pesan selamat datang
    $welcomeMessage = '';
    if ($role === 'admin') {
        $welcomeMessage = 'Selamat datang, Admin ' . ucfirst($row['username']) . '!';
    } elseif ($role === 'dokter') {
        $welcomeMessage = 'Selamat datang, Dokter ' . ucfirst($row['username']) . '!';
    } elseif ($role === 'pasien') {
        $welcomeMessage = 'Selamat datang, Pasien ' . ucfirst($row['username']) . '!';
    }

    echo json_encode(['status' => 'success', 'redirect_url' => $redirect_url, 'welcome_message' => $welcomeMessage]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Username atau password salah. Silakan coba lagi.']);
}
?>
