<?php
session_start();
if(isset($_SESSION['id_akun'])){
    unset($_SESSION['id_akun']);
}
header('Location: index.php');
?>