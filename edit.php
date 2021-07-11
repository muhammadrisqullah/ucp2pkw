<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Edit data buku</title>
</head>
<body>
    <nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand" href="#">Edit data buku</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="toko_buku.php">Tambah Buku</a>
                    <a class="nav-link" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
     include 'config.php';
     $id = $_GET['id'];
     $buku = mysqli_query($koneksi, "select * from buku where id='$id'");
     while ($data = mysqli_fetch_assoc($buku)) {
    ?>
        <div class="container mt-5">
            <p><a href="toko_buku.php">Home</a> /Edit buku/ <?php echo $data['nama_buku'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Detail Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="masukkan nama buku" name="nama_buku" value="<?php echo $data['nama_buku']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="masukkan kategori buku" name="kategori_buku" value="<?php echo $data['kategori_buku']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="masukkan penerbit buku" name="penerbit" value="<?php echo $data['penerbit']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" placeholder="masukkan harga buku" name="harga" value="<?php echo $data['harga']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Diskon</label>
                            <input type="number" class="form-control" id="diskon" placeholder="masukkan diskon buku" name="diskon" value="<?php echo $data['diskon']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>