<?php
require_once('../lib/db_login.php');
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    make_query("DELETE FROM kuis WHERE id_kuis=$id");
}
?>