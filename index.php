<!DOCTYPE html>
<html lang="en">

<style>
.client_section {
    padding: 50px 0;
    background-color: #f7f7f7;
    color: #333;
}

.heading_container {
    text-align: center;
    margin-bottom: 40px;
}

.heading_container h2 {
    font-size: 32px;
    margin-bottom: 10px;
}

.testimonial-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
}

.card {
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-content {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 20px;
    padding: 20px;
}

.img-box {
    display: flex;
    align-items: center;
    justify-content: center;
}

.img-box img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.text-content {
    text-align: left;
}

.text-content h6 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 600;
}

.location {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

.testimonial-text {
    font-size: 14px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .card-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .img-box {
        justify-content: center;
        margin-bottom: 15px;
    }
}

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Udinus Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
    <div class="container-fluid flex flex-col justify-center items-center text-white p-5"
        style="height: 400px; background-color: #b4c6d0;">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji Pasien - Dokter</h1>
        <h5>
            Bimbingan Karir 2023 Web Developer
        </h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai pasien</p>
                        <a href="loginUser.php" class="btn btn-primary btn-block">Login Sebagai Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-nurse fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="login.php" class="btn btn-success btn-block">Login Sebagai Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Testimoni Pasien</h2>
            <p>Para Pasien yang Kami Cintai</p>
        </div>
        <!-- Customer 1 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/ahmad.jpg" alt="Client 1">
                    </div>
                    <div class="text-content">
                        <h6>Ahmad</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Mantap, berobat jauh lebih mudah di Poliklinik Udinus</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer 2 -->
        <div class="testimonial-card my-4">
            <div class="card">
                <div class="card-content">
                    <div class="img-box">
                        <img src="assets/images/Syafina.jpg" alt="Client 2">
                    </div>
                    <div class="text-content">
                        <h6>Syafina</h6>
                        <p class="location">Semarang</p>
                        <p class="testimonial-text">Pelayan terbaik yang pernah saya alami untuk kesehatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>