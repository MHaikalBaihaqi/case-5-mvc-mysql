<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'case5pemweb');

// koneksi ke database MySQL //
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// cek koneksi
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
