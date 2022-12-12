<?php
$connect = mysqli_connect("localhost", "root", "", "praktikum5");

if (!$connect) {
    die("Koneksi gagal : " . mysqli_connect_error());
}
