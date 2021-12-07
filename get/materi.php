<?php
    require_once('../lib/db_login.php');
    $pul = $_GET['id_pulau'];
    $p = $_GET['p'];
    $res = make_query("SELECT id_materi FROM urutan_materi WHERE id_pulau=$pul AND urutan=$p");
    if($res->num_rows > 0) $materi = $res->fetch_object()->id_materi;
    else header('Location: ../user/beranda.php');
?>