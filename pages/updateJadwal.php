<?php
include("../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = $_POST["id"];
    $id_dokter = $_POST["id_dokter"];
    $hari = $_POST["hari"];
    $jam_mulai = $_POST["jam_mulai"];
    $jam_selesai = $_POST["jam_selesai"];

    // Query untuk melakukan update data obat
    $query = "UPDATE jadwal_periksa SET 
        id_dokter = '$id_dokter', 
        hari = '$hari', 
        jam_mulai = '$jam_mulai',
        jam_selesai = '$jam_selesai'
        WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($mysqli, $query)) {
        // Jika berhasil, redirect kembali ke halaman index atau sesuaikan dengan kebutuhan Anda
        echo '<script>';
        echo 'alert("Data jadwal periksa berhasil diubah!");';
        echo 'window.location.href = "../home_jadwal_periksa.php";';
        echo '</script>';
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }
}

// Tutup koneksi
mysqli_close($mysqli);
?>