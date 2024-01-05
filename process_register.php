<?php
// Koneksi ke database (Sesuaikan dengan koneksi Anda)
$conn = mysqli_connect('localhost', 'root', '', 'poli_bk');

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari form registrasi
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_ktp = $_POST['no_ktp'];
$no_hp = $_POST['no_hp'];
$no_rm = $_POST['no_rm'];

// Check apakah nomor KTP atau nomor HP sudah ada di database
$check_query = "SELECT * FROM pasien WHERE no_ktp = '$no_ktp' OR no_hp = '$no_hp'";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Data sudah ada dalam database, tidak boleh sama
    $response = [
        'success' => false,
        'message' => 'Nomor KTP atau Nomor HP sudah terdaftar. Masukkan nomor yang berbeda.'
    ];
} else {
    // Data belum ada dalam database, bisa dilakukan registrasi
    $query = "INSERT INTO pasien (nama, alamat, no_ktp, no_hp) VALUES ('$nama', '$alamat', '$no_ktp', '$no_hp')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registrasi sukses
        $response = [
            'success' => true,
            'message' => 'Registrasi Berhasil! Pasien berhasil terdaftar.'
        ];
    } else {
        // Registrasi gagal
        $response = [
            'success' => false,
            'message' => 'Registrasi Gagal. Silakan coba lagi.'
        ];
    }
}

mysqli_close($conn);

// Mengirim response dalam bentuk JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
