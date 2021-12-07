<?php
require_once('../lib/db_login.php');
$res = make_query("SELECT id_pulau, nama_pulau FROM pulau");
$nav = $_GET['nav'];
while($row = $res->fetch_object()){
    echo "
    <tr>
    <td onclick='javascript:location.href=\"urutan_$nav.php?id_pulau=$row->id_pulau\"'><a href='urutan_$nav.php?id_pulau=$row->id_pulau'>$row->nama_pulau</a></td>
    </tr>
    ";
}
?>