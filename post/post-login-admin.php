<?php
require_once('../lib/db_login.php');
$username = test_input($_POST['username']);
$res = one_res("SELECT id_akun FROM akun WHERE username='$username'");

$res = one_res("SELECT ad.id_admin FROM akun ak, admin ad WHERE ak.username='$username' AND ak.id_akun = ad.id_admin");

$res = make_query("SELECT ak.id_akun, ak.username, ak.password FROM akun ak, admin ad WHERE ak.id_akun = ad.id_admin AND ak.username='$user' AND ak.password='$pass'");




$_SESSION['id_akun'] = $res->id_akun;

if(make_query("SELECT * FROM admin WHERE id_admin=$res->id_akun")->num_rows == 0){
    $_SESSION['kategori'] = 'user';
}
else $_SESSION['kategori'] = 'admin';

// header
header('Location: ../user/beranda.php');
?>