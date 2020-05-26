<?php
include_once 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $mysqli->query($sql);
if ($result->num_rows) {
$row = $result->fetch_object();
if (password_verify($password, $row->password)) {
session_start();
$_SESSION['app123_logged_in'] = true;
$_SESSION['name'] = $row->name;
header('Location: beranda.php');
} else {
echo 'Wrong username or password.';
echo "<a href='form-login.php'>Login ulang</a>";
}
} else {
echo 'Wrong username or password.';
echo "<a href='form-login.php'>Login ulang</a>";
}
$result->close();
$mysqli->close();