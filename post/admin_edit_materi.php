<?php
require_once('../lib/db_login.php');
if (isset($_POST['tambah'])){
    $judul = test_input($_POST['judul']);
    $id = $_GET['id'];

    make_query("UPDATE materi SET judul_materi='$judul' WHERE id_materi=$id");

    if($_FILES["file_materi"]['name'] != ''){
        if (!move_uploaded_file($_FILES["file_materi"]["tmp_name"], '../materi/'.$db->insert_id.'.html')) {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    header("Location: ../admin/materi.php");
}
?>