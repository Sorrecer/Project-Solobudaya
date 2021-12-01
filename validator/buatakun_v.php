<?php
require_once('../lib/validator.php');
if(isset($_POST['tambah'])){
    require_once('../lib/db_login.php');
    required('username');
    required('password');
    required('konPassword', 'error_konpassword', 'konfirmasi password harus diisi!');

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $kpass = $_POST['konPassword'];

    if($valid){
        if(make_query("SELECT * FROM akun WHERE username='$user'")->num_rows > 0){
            $valid = false;
            $error_username = 'username sudah dipakai';
        }
        if($pass != $kpass){
            $error_konpassword = 'konfirmasi password tidak sama';
            $valid = false;
        }
    }

    echo $pass;
    echo md5($pass);
    do_valid('../post/create_account.php');
}
?>