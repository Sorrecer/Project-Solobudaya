<?php
require_once('../lib/db_login.php');
$res = make_query("SELECT id_provinsi, nama_provinsi FROM provinsi");
while($row = $res->fetch_object()){
    echo "
    <tr>
    <td><a href='materi.php?id_provinsi=$row->id_provinsi'>$row->nama_provinsi</a></td>
    </tr>
    ";
}
?>