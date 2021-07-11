<?php

include './config.php';

$id = $_POST['id'];
$nb = $_POST['nama_buku'];
$kb = $_POST['kategori_buku'];
$pb = $_POST['penerbit'];
$hg = $_POST['harga'];
$dk = $_POST['diskon'];

mysqli_query($koneksi, "update buku set nama_buku='$nb', kategori_buku='$kb', penerbit='$pb', harga='$hg',diskon='$dk' where id='$id'");

header("location:./toko_buku.php");