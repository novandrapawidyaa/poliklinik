<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
            /* membuat teks sedikit lebih tebal */
        }

        /* Mengubah ukuran dan gaya font untuk judul dan konten yang berbeda */
        h1.text-white {
            font-size: 2.2rem;
            /* ukuran font yang lebih besar */
            font-family: 'Arial', sans-serif;
            /* ganti dengan font pilihan Anda */
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        /* Gaya khusus untuk teks pada info-box */
        .info-box-text {
            font-size: 1rem;
            /* menyesuaikan ukuran font */
            margin-bottom: 5px;
            /* memberikan sedikit ruang di bawah teks */
        }

        /* Gaya khusus untuk nomor pada info-box */
        .info-box-number {
            font-size: 1.2rem;
            /* menyesuaikan ukuran font */
            font-weight: bold;
            /* membuatnya tebal */
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header py-5 bg-primary text-white">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-center">Selamat Datang <b>Dr. Kusuma Wardana</b></h1>
                    <h4 class="m-0 text-center">Saat Ini anda sedang berada di Udinus Poliklinik</h4>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Jumlah Pasien saat ini :</span>
                                    <span class="info-box-number text-white">150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Status Kerja saat ini :</span>
                                    <span class="info-box-number text-white active">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Pasien Telah Diperiksa :</span>
                                    <span class="info-box-number text-white">50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Pasien Hari ini :</span>
                                    <span class="info-box-number text-white">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Custom Content Here -->
            <div class="row">
                <!-- Jadwal Harian Dokter -->
                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-warning">
                        <div class="card-body">
                            <h5 class="text-white">Jadwal Harian</h5>
                            <ul class="list-unstyled">
                                <li class="text-white">09:00 - Pasien: Budi</li>
                                <li class="text-white">10:30 - Pasien: Siti</li>
                                <!-- Lainnya... -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-danger">
                        <div class="card-body">
                            <h5 class="text-white">Notifikasi Penting</h5>
                            <p class="text-white">Pasien Dengan Kasus Kritis: Ani (Ruangan 305)</p>
                            <!-- Lainnya... -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-success">
                        <div class="card-body">
                            <h5 class="text-white">Statistik Mingguan</h5>
                            <p class="text-white">Pasien Diperiksa Minggu Lalu: 75</p>
                            <!-- Grafik atau detail lainnya... -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-secondary">
                        <div class="card-body">
                            <h5 class="text-white">Pesan dan Konsultasi</h5>
                            <p class="text-white">Anda memiliki 5 pesan baru.</p>
                            <!-- Tautan atau formulir untuk konsultasi... -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>