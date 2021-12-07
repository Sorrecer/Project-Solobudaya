<?php
    require_once('../lib/db_login.php');
    $pul = $_GET['id_pulau'];
    $p = $_GET['p'];
    $res = make_query("SELECT id_kuis FROM urutan_kuis WHERE id_pulau=$pul AND urutan=$p");
    if($res->num_rows > 0) $kuis = $res->fetch_object()->id_kuis;
    else header('Location: ../user/beranda.php');
?>