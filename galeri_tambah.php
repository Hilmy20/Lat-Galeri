<?php
if (isset($_POST['judul'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $id_album = $_POST['id_album'];
    $tanggal = $_POST['tanggal'];
    $id_user = $_SESSION['user']['id_user'];

    $gambar = $_FILES['gambar'];
    $nama_gambar = $gambar['name'];

    move_uploaded_file($gambar['tmp_name'], 'gambar/' . $gambar['name']);
    $query = mysqli_query($koneksi, "INSERT INTO foto(judul,deskripsi,id_album,tanggal,gambar,id_user) VALUES('$judul', '$deskripsi', '$id_album', '$tanggal','$nama_gambar', '$id_user')");

    if ($query > 0) {
        echo '<script>
                alert("Tambah Data Berhasil!"); location.href="?page=galeri"
              </script>';
    } else {
        echo '<script>
                 alert("Tambah Data Gagal!")
              </script>';
    }
}
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Galeri Foto</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Galeri Foto</li>
    </ol>
    <a href="?page=galeri" class="btn btn-danger">Kembali</a>
    <form method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td width="200">Judul</td>
                <td width="1">:</td>
                <td><input type="text" name="judul" class="form-control"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="deskripsi" class="form-control"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>:</td>
                <td>
                    <select name="id_album" class="form-select form-control">
                        <?php
                        $al = mysqli_query($koneksi, 'SELECT * FROM album');
                        while ($album = mysqli_fetch_array($al)) {
                        ?>
                        <option value="<?= $album['id_album'] ?>"><?= $album['nama_album'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" class="form-control"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>