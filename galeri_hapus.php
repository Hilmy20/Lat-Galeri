<?php
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM foto where id_foto='$id'");

if ($query > 0) {
    echo '<script>
            alert("Hapus Data Berhasil!"); location.href="?page=galeri"
          </script>';
} else {
    echo '<script>
            alert("Hapus Data Gagal!");
          </script>';
}