<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow" style="width: 350px;">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
                <!-- Bagian untuk menampilkan pesan error ketika registrasi/Login -->
                 <?php if (!empty($error)):?>
                    <div class=" alert alert-danger"><?=$error?></div>
                    <?php endif;?>

                    
                <!-- Bagian form login -->


                <form method="POST" action="ceklogin.php">
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3 text-center">
                        Belum punya akun? <a href="register.php">Klik disini</a>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Masuk</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>