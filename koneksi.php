<?php
$kon = mysqli_connect("localhost", "root", "", "basisdata");

if (mysqli_connect_error($kon)) {
    echo "koneksi gagal " . mysqli_connect_error();
}
