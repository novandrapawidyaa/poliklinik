<?php
// Koneksi ke database (Sesuaikan dengan koneksi Anda)
$conn = mysqli_connect('localhost', 'root', '', 'poli');

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari form registrasi
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query = "INSERT INTO user_login (username, password, role) VALUES ('$username', '$password', '$role')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Registrasi sukses
    $response = [
        'success' => true,
        'message' => 'Registrasi Berhasil! Anda berhasil terdaftar. Silakan login untuk melanjutkan.'
    ];
} else {
    // Registrasi gagal
    $response = [
        'success' => false,
        'message' => 'Registrasi Gagal. Terjadi kesalahan. Silakan coba lagi.'
    ];
}

mysqli_close($conn);

// Mengirim response dalam bentuk JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
