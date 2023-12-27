<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-box {
            margin: 5% auto;
            width: 400px;
        }
        .logo {
    display: block;
    margin: 0 auto 20px;
    max-width: 100%;
    height: auto;
}
    </style>

</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <form id="loginForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="loginUser()">Login</button>
                        </div>
                    </form>
                    <p class="text-center mt-3 mb-0">Belum punya akun? <a href="register.php">Registrasi di sini</a></p>
                    <img src="assets/image/logo poli.png" alt="Logo poli" class="logo">
            </div>
        </div>
    </div>
    <script>
    function loginUser() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Kirim data ke PHP untuk proses login
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'process_login.php');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    // Handle login berhasil
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Berhasil!',
                        text: response.welcome_message,
                        timer: 3000,
                        showConfirmButton: false
                    }).then(function () {
                        window.location.href = response.redirect_url;
                    });
                } else {
                    // Handle login gagal
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Gagal',
                        text: response.message
                    });
                }
            }
        };
        var params = 'username=' + username + '&password=' + password;
        xhr.send(params);
    }
</script>
</body>
</html>
    </script>
</body>
</html>
