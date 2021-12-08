<?php
if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/')) != '/index.php'){
    $continue = false;
    if(isset($_SESSION['id_akun']) && isset($_SESSION['kategori'])){
        if($_SESSION['kategori'] == 'user'){
            $continue = true;
        }
        else{
            header('Location: ../admin/');
        }
    }

    if(!$continue){
        header('Location: ../user/');
    }
}
else{
    if(isset($_SESSION['id_akun']) && isset($_SESSION['kategori'])){
        if($_SESSION['kategori'] == 'user'){
            header('Location: ../user/beranda.php');
        }
        else if($_SESSION['kategori'] == 'admin'){
            header('Location: ../admin/');
        }
    }
}
?>