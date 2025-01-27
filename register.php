<?php
include "koneksi.php";

if (isset($_POST['username'])) {
    $nama = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "INSERT INTO user(nama_lengkap,email,alamat,username,password) values('$nama','$email','$alamat','$username','$password')");

    if ($query > 0) {
        echo '<script>
                alert("Register Berhasil!"); location.href="login.php"
             </script>';
    } else {
        echo '<script>
                alert("Register Gagal!");
              </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Galeri Foto</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="nama_lengkap"
                                                placeholder="Masukkan Nama Lengkap" />
                                            <label class="small mb-1">Nama Lengkap</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Masukkan Email" />
                                            <label class="small mb-1">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" name="alamat"
                                                placeholder="Masukkan Alamat"></textarea>
                                            <label class="small mb-1">Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="username"
                                                placeholder="Masukkan Username" />
                                            <label class="small mb-1">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Masukkan Password" />
                                            <label class="small mb-1">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <a href="login.php">Sudah Punya Akun? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>