<?php
$continue = false;
if(isset($_SESSION['id_akun']) && isset($_SESSION['kategori'])){
    if($_SESSION['kategori'] == 'admin'){
        $continue = true;
    }
    else{
        header('Location: ../user/beranda');
    }
}

if(!$continue){
    header('Location: ../user/');
}
?>