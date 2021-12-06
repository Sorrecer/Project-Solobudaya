<?php
require_once('../lib/db_login.php');
$res = make_query("SELECT id_pulau, nama_pulau FROM pulau");
while($row = $res->fetch_object()){
    echo "
    <tr>
    <td><a href='materi.php?id_pulau=$row->id_pulau'>$row->nama_pulau</a></td>
    </tr>
    ";
}
?>