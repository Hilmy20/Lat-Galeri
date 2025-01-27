<div class="container-fluid px-4">
    <h1 class="mt-4">Galeri Foto</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Galeri Foto</li>
    </ol>
    <a href="?page=galeri_tambah" class="btn btn-primary mb-3">+ Tambah Galeri</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Album</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Total Like</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT foto.*, album.nama_album FROM foto LEFT JOIN album ON album.id_album = foto.id_album");
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td>
                    <a href="gambar/<?= $data['gambar'] ?>" target="_blank">
                        <img src="gambar/<?= htmlspecialchars($data['gambar']) ?>" width="200" alt="gambar"
                            class="img-thumbnail" width="100"></a>
                </td>
                <td><?= htmlspecialchars($data['judul']) ?></td>
                <td><?= htmlspecialchars($data['nama_album']) ?></td>
                <td><?= htmlspecialchars($data['deskripsi']) ?></td>
                <td><?= htmlspecialchars($data['tanggal']) ?></td>
                <td><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM likefoto WHERE id_foto=" . $data['id_foto'])) ?>
                </td>
                <td>
                    <?php
                        if (mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM likefoto WHERE id_foto=" . $data['id_foto'] . " AND id_user=" . $_SESSION['user']['id_user'])) < 1) {
                        ?>
                    <a href="?page=galeri_like&id=<?= $data['id_foto'] ?>" class="btn btn-warning btn-sm">Like</a>
                    <?php
                        }
                        ?>
                    <a href="?page=galeri_komentar&id=<?= $data['id_foto'] ?>"
                        class="btn btn-warning btn-sm">Komentar</a>
                    <a href="?page=galeri_ubah&id=<?= $data['id_foto'] ?>" class="btn btn-primary btn-sm">Ubah</a>
                    <a href="?page=galeri_hapus&id=<?= $data['id_foto'] ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>