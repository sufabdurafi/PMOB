<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = ""; // Kosongkan jika Anda menggunakan XAMPP dengan default
$database = "tbl_employee";

// Buat koneksi
$connection = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query ke table employee
$sql = "SELECT * FROM tbl_employee";
$result = mysqli_query($connection, $sql);

if (!$result) {
    die("Error dalam query: " . mysqli_error($connection));
}

// Pembuatan array
$emparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
}

// Pembuatan JSON
echo json_encode($emparray);

// Tutup koneksi
mysqli_close($connection);
?>
