<?php
$koneksi = mysqli_connect("localhost", "root","","toko_buku");

if(mysqli_connect_errno()){
    echo "koneksi database gagal :".mysqli_conect_error();

}