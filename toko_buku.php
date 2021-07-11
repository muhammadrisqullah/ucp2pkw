<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Data Buku</title>
</head>
<body>
    <nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
        <a class="navbar-brand" href="#">Data Buku</a> 
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
    <div class="container data-buku mt-5" >
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah data
        </button>
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                  <form method="post" action="create.php" name="form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Tambahkan Buku</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="masukkan nama buku" name="nama_buku" required>
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="masukkan kategori buku" name="kategori_buku" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="masukkan penerbit buku" name="penerbit" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" placeholder="masukkan harga buku" name="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Diskon</label>
                            <input type="number" class="form-control" id="diskon" placeholder="masukkan diskon buku" name="diskon" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">tambah</button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        <div class="container data-mahasiswa mt-5">
            <table class="table table-striped" id="tabelBuku">
                <thead>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include 'config.php';
                $no = 1;
                $buku = mysqli_query($koneksi, "select * from buku");
                while ($data = mysqli_fetch_array($buku)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama_buku']; ?></td>
                        <td><?php echo $data['kategori_buku']; ?></td>
                        <td><?php echo $data['penerbit']; ?></td>
                        <td>Rp.<?php echo $data['harga']; ?></td>
                        <td><?php echo $data['diskon']; ?>%</td>
                        <td>
                            <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">Detail</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data mahasiswa ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js" ></script>
    <script>
        $(document).ready(function() {
            $('#tabelBuku').DataTable();
        } );
    </script>
</body>
</html>