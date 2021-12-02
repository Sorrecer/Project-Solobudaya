<?php
require_once('../lib/db_login.php');
$id = $_SESSION['id_akun'];
$res1 = one_res("SELECT nama_user, deskripsi FROM user WHERE id_user=$id");
$res2 = one_res("SELECT username FROM akun WHERE id_akun=$id");

$name = $res2->username;
if(test_input($res1->nama_user) != ''){
    $name = $res1->nama_user;
}

$desc = $res1->deskripsi;
?>