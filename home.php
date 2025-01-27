<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM foto")); ?> Total Foto
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM komentar")); ?> Total
                    Komentar</div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM likefoto")); ?> Total
                    Like
                </div>
            </div>
        </div>
    </div>

</div>