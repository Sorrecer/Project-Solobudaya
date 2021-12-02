<?php
require_once('../lib/db_login.php');
$id = $_SESSION['id_akun'];
if(isset($_POST['ubah_nama'])){
    $name = test_input($_POST["name"]);
    make_query("UPDATE user SET nama_user='$name' WHERE id_user=$id");
}
if(isset($_POST['ubah_deskripsi'])){
    $desc = $_POST["deskripsi"];
    make_query("UPDATE user SET deskripsi='$desc' WHERE id_user=$id");
}
?>