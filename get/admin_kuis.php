<?php
require_once('../lib/db_login.php');
$res = make_query("SELECT id_kuis, judul_kuis FROM kuis");
while($row = $res->fetch_object()){
    echo "
    <tr>
    <td>$row->id_kuis</td>
    <td>$row->judul_kuis</td>
    <td><div class='d-grid gap-1'>
    <a href='edit_kuis.php?id=$row->id_kuis'><button class='btn btn-primary btn-sm'>Edit</button></a>
    <a href=''><form method='POST'><button type='submit' name='delete' value=$row->id_kuis class='btn btn-danger btn-sm' onclick = 'return confirm (\"Apakah anda yakin ingin menghapus?\")'>Delete</button></form></a>
    <a href='lihat_kuis.php?id_kuis=$row->id_kuis'><button class='btn btn-primary btn-sm'>Lihat</button></a>
    </div></td>
    </tr>
    ";
}
?>