<?php
require_once('../lib/db_login.php');
$pass = md5($_POST['password']);
$id = $_SESSION['id_akun'];

make_query("UPDATE akun SET password='$pass' WHERE id_akun=$id");

header('Location: ../user/akun.php');
?>