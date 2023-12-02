<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "coffeshop";

$koneksi = mysqli_connect($server, $username, $password, $dbname) or die("Koneksi ke database gagal");