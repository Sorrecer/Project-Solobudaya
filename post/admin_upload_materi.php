<?php
require_once('../lib/db_login.php');
if (isset($_POST['tambah'])){
    $judul = test_input($_POST['judul']);
    $id_prov = $_GET['id_provinsi'];

    make_query("INSERT INTO materi SET judul_materi='$judul', id_provinsi=$id_prov");

    if($_FILES["file_materi"]['name'] != ''){
        if (!move_uploaded_file($_FILES["file_materi"]["tmp_name"], '../materi/'.$db->insert_id.'.html')) {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>