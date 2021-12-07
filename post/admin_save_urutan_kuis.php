<?php
require_once('../lib/db_login.php');

if(isset($_POST['submit'])){
    $pul = $_GET['id_pulau'];
    make_query("DELETE FROM urutan_kuis WHERE id_pulau=$pul");
    $c = 0;
    foreach($_POST['urutan'] as $i){
        make_query("INSERT urutan_kuis SET id_pulau=$pul, id_kuis=$i, urutan=$c");
        $c++;
    }
    header('Location: ../admin/provinsi.php?nav=kuis');
}

?>