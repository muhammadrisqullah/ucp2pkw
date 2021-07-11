<?php

include './config.php';


$nb = $_POST['nama_buku'];
$kb = $_POST['kategori_buku'];
$pb = $_POST['penerbit'];
$hg = $_POST['harga'];
$dk = $_POST['diskon'];


mysqli_query($koneksi, "insert into buku values ('','$nb','$kb','$pb','$hg','$dk')");

header("location:./toko_buku.php");