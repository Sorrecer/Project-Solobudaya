<?php
require_once('../lib/validator.php');
if(isset($_POST['submit'])){
    require_once('../lib/db_login.php');
    required('username');
    required('password');

    $user = test_input($_POST['username']);
    $pass = md5($_POST['password']);

    if($valid){
        $res = make_query("SELECT * FROM akun WHERE username='$user' AND password='$pass'");
        if($res->num_rows <= 0){
            $valid = false;
            $error_username = 'username atau password tidak benar';
        }
    }

    do_valid('../post/login.php');
}
?>