<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        /* Section 1: Navbar */
        .navbar {
            overflow: hidden;
            background-color: #232ed1;
            font-family: Arial, sans-serif;
            width: 100%;
            display: flex;
        }

        .navbar a {
            flex-grow: 1;
            color: #f2f2f2;
            text-align: left;
            padding: 20px 25px;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 24px;
            padding-left: 100px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Section 2: Banner */
        .banner-section {
            font-family: 'Sora', sans-serif;
            background-color: #232ed1;
            background-size: cover;
            background-position: center;
            color: #000;
            padding: 80px 0;
            height: 45vh;
        }

        .banner-section h1 {
            color: #fff;
            text-align: center;
        }

        .banner-section p {
            text-align: center;
        }

        .fade-in {
            opacity: 1;
            /* Make text visible by default */
            transition: opacity 1s ease;
        }

        /* Section 3: Login */
        .login-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
        }

        .icon-container {
            font-family: 'Sora', sans-serif;
            margin: 100px;
            text-align: justify;
            border: 1px solid #ccc;
            /* Menambahkan border */
            padding: 20px;
            /* Menambahkan ruang padding */
            transition: transform 0.5s, box-shadow 0.5s;
            /* Animasi transisi transformasi dan bayangan */
        }

        .icon-container img {
            width: 100px;
            /* Example size, adjust as needed */
            height: auto;
        }

        .icon-link {
            color: blue;
            text-decoration: none;
        }

        .icon-link:hover {
            text-decoration: underline;
        }


        /* Section 4: Testimoni */
        .client_section {
            text-align: center; /* Center-align the testimonial section */
            font-family: 'Sora', sans-serif;
            background-color: #fff;
        }

        .box {
            font-family: 'Sora', sans-serif;
            background: #fff;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto 30px; /* Center-align the testimonial boxes and add margin */
            width: 80%; /* Reduce the width of the testimonial boxes */
            max-width: 400px; /* Set a maximum width for the testimonial boxes */
        }

        .box p {
            color: #666;
            line-height: 1.6;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .img-box {
            margin: 0 15px 0 0;
            width: 60px; /* Increase the width of the img-box */
            height: 60px; /* Increase the height of the img-box */
            overflow: hidden;
            border-radius: 50%;
        }

        .img-box img {
            width: 100%;
            height: auto;
        }

        .client_info h6 {
            font-weight: bold;
            margin: 0;
            color: #333;
            text-align: justify;
        }

        .client_info p {
            font-size: 0.9em;
            color: #666;
            margin: 0;
            text-align: justify;
        }
        
        .box p{
            text-align: justify;
        }
    </style>
</head>

<body>
    <!-- Section 1: Navbar -->
    <section class="navigation-bar">
        <div class="navbar">
            <a href="#home">Poliklinik Sehat Ambal Waras</a>
        </div>
    </section>

    <!-- Section 2: Banner -->
    <section class="banner-section">
        <div class="container text-right my-5 fade-in">
            <h1 style="font-size: 56px;"><b>Sistem Temu Janji</b></h1>
            <h1 style="font-size: 56px;"><b>Pasien - Dokter</b></h1>
            <p style="font-size: 22px;">Bimbingan Karir 2023 Bidang Website</p>
        </div>
    </section>

    <!-- Section 3: Login -->
    <section class="login-section">
        <!-- Left Icon and Text -->
        <div class="col-md-6 icon-container">
            <img src="asset/images/user.png" alt="First Icon">
            <h2 style="font-size: 32px;">Login Sebagai Pasien</h2>
            <p>Apabila Anda adalah seorang Pasien, silahkan Login terlebih dahulu untuk melakukan pendaftaran sebagai
                Pasien!</p>
            <a href="controller.php" class="icon-link">Klik Link Berikut -></a>
        </div>

        <!-- Right Icon and Text -->
        <div class="col-md-6 icon-container">
            <img src="asset/images/user.png" alt="Second Icon">
            <h2 style="font-size: 32px;">Login Sebagai Dokter</h2>
            <p>Apabila Anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk memulai melayani Pasien!</p>
            <a href="controller.php" class="icon-link">Klik Link Berikut -></a>
        </div>
    </section>

    <!-- Section 4: Testimoni -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="font-size: 32px;">Testimoni Pasien</h2>
                <p>Para Pasien Yang Setia</p>
            </div><br><br><br>
            <div class="row">
                <!-- Customer 1 -->
                <div class="row-md-6">
                    <div class="box">
                        <div class="profile">
                            <div class="img-box">
                                <img src="asset/images/testimoni.png" alt="Client 1">
                            </div>
                            <div class="client_info">
                                <h6>Nopal</h6>
                                <p>Semarang</p>
                            </div>
                        </div>
                        <p>Pelayanan diweb ini sangat cepat dan mudah, detail histori tercatat lengkap, termasuk catatan obat, harga pelayanan terjangkau, dokter ramah pokoke mantab pol!</p>
                    </div>
                </div>
                <!-- Customer 2 -->
                <div class="row-md-6">
                    <div class="box">
                        <div class="profile">
                            <div class="img-box">
                                <img src="asset/images/testimoni.png" alt="Client 2">
                            </div>
                            <div class="client_info">
                                <h6>Ilyas</h6>
                                <p>Semarang</p>
                            </div>
                        </div>
                        <p>Aku tidak pernah merasakan mudahnya berobat sebelum mengenal web ini, web yang mudah digunakan dan dokter yang terampil membuat berobat menjadi lebih menyenangkan!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>