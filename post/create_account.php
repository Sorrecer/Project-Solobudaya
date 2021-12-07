<?php
require_once('../lib/db_login.php');
$username = test_input($_POST['username']);
$password = md5($_POST['password']);
$now = date('Y-m-d');

make_query("INSERT INTO akun SET username='$username', password='$password'");
$id = $GLOBALS['db']->insert_id;
make_query("INSERT INTO user SET id_user=$id, tgl_gabung='$now' foto_profil=2");

header('Location: ../user/index.php');

// header
?>