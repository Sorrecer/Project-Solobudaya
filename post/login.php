<?php
require_once('../lib/db_login.php');
$username = test_input($_POST['username']);
$res = one_res("SELECT id_akun FROM akun WHERE username='$username'");
$_SESSION['id_akun'] = $res->id_akun;

if(make_query("SELECT * FROM admin WHERE id_admin=$res->id_akun")->num_rows == 0){
    $_SESSION['kategori'] = 'user';
    header('Location: ../user/beranda.php');
}
else{
    $_SESSION['kategori'] = 'admin';
    header('Location: ../admin/index.php');
}

// header
?>