<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tambahan CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-box {
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
        <div class="register-box">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-4">Registrasi</h3>
                    <form id="registerForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="dokter">Dokter</option>
                                <option value="pasien">Pasien</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="registerUser()">Registrasi</button>
                        </div>
                            <img src="assets/image/logo poli.png" alt="Logo poli" class="logo">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function registerUser() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var role = document.getElementById('role').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_register.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = 'login.php';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                }
            };
            var data = 'username=' + username + '&password=' + password + '&role=' + role;
            xhr.send(data);
        }
    </script>
</body>
</html>