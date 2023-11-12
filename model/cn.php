<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbmypham";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Thiết lập bảng mã kết nối
mysqli_set_charset($conn, 'utf8');
?>
