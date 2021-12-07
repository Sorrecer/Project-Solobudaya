<?php
$valid = true;
if (isset($_POST['tambah'])){
    if($_FILES["file_gambar"]['name'] != ''){
        if(in_array($_FILES["file_gambar"]['name'], scandir('../images/materi/'))){
            $valid = false;
            $error_gambar = "gambar sudah ada";
        }
        if (!move_uploaded_file($_FILES["file_gambar"]["tmp_name"], '../images/materi/'.$_FILES["file_gambar"]['name'])) {
            $error_gambar = "Sorry, there was an error uploading your file.";
            $valid = false;
        }
    }
    else{
        $valid = false;
        $error_gambar = 'gambar harus diisi';
    }

    if($valid) header("Location: ../admin/gambar.php");
}
?>