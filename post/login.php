<?php
require('../lib/db_login.php');
$username = test_input($_POST['username']);
$res = one_res("SELECT id FROM akun WHERE username=$username");
$_SESSION['id'] = $res->id;

if(make_query("SELECT * FROM admin WHERE id_admin=$res->id")->num_rows == 0){
    $_SESSION['kategori'] = 'user';
}
else $_SESSION['kategori'] = 'admin';

// header
?>