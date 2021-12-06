<?php
require_once('../lib/db_login.php');
if (isset($_POST['tambah'])){
    $judul = test_input($_POST['judul']);
    $id_pulau = $_GET['id_pulau'];

    make_query("INSERT INTO materi SET judul_materi='$judul', id_pulau=$id_pulau");

    if($_FILES["file_materi"]['name'] != ''){
        if (!move_uploaded_file($_FILES["file_materi"]["tmp_name"], '../materi/'.$db->insert_id.'.html')) {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    header("Location: ../admin/materi.php?id_pulau=".$_GET['id_pulau']);
}
?>