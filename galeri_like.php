<?php
$id = $_GET['id'];
$id_user = $_SESSION['user']['id_user'];
$tanggal = date("Y/m/d");

$query = mysqli_query($koneksi, "INSERT INTO likefoto(id_foto,id_user,tanggal) values('$id','$id_user','$tanggal')");

if ($query > 0) {
    echo '<script>
            alert("Like Berhasil!"); location.href="?page=galeri"
          </script>';
} else {
    echo '<script>
            alert("Like Gagal!");
          </script>';
}