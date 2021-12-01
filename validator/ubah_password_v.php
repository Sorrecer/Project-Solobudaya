<?php
require_once('../lib/validator.php');
require_once('../lib/db_login.php');
if(isset($_POST['tambah'])){
    $pass = md5($_POST['oldPassword']);
    $id = $_SESSION['id_akun'];
    required('oldPassword', 'error_oldpassword', 'password lama harus diisi!');
    required('password', null, 'password baru harus diisi');
    required('konPassword', 'error_konpassword', 'konfirmasi password harus diisi!');

    if($valid){
        if(make_query("SELECT * FROM akun WHERE id_akun=$id AND password='$pass'")->num_rows<=0){
            $valid = false;
            $error_oldpassword = 'password lama tidak sesuai';
        }
        if($_POST['password'] != $_POST['konPassword']){
            $valid = false;
            $error_konpassword = 'konfirmasi password tidak sama';
        }
    }
    do_valid('../post/change_password.php');
}