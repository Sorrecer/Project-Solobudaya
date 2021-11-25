<?php
require_once('../lib/db_login.php');
$username = test_input($_POST['username']);
$password = md5(test_input($_POST['password']));

make_query("INSERT INTO akun SET username='$username', password='$password'");
make_query("INSERT INTO user SET id_user=(SELECT id_akun FROM akun WHERE username='$username')");

header('Location: ../user/index.php');

// header
?>