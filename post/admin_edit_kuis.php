<?php
require_once('../lib/db_login.php');
if (isset($_POST['tambah'])){
    $judul = test_input($_POST['judul']);
    $id = $_GET['id'];

    make_query("UPDATE kuis SET judul_kuis='$judul' WHERE id_kuis=$id");

    if($_FILES["file_kuis"]['name'] != ''){
        if (!move_uploaded_file($_FILES["file_kuis"]["tmp_name"], '../kuis/'.$id.'.php')) {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    header("Location: ../admin/kuis.php");
}
?>