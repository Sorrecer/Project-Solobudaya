<?php
require_once('../lib/db_login.php');
if (isset($_POST['tambah'])){
    $judul = test_input($_POST['judul']);

    make_query("INSERT INTO kuis SET judul_kuis='$judul'");

    if($_FILES["file_kuis"]['name'] != ''){
        if (!move_uploaded_file($_FILES["file_kuis"]["tmp_name"], '../kuis/'.$db->insert_id.'.php')) {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    header("Location: ../admin/kuis.php");
}
?>