<?php
require_once('../lib/db_login.php');
$id_prov = $_GET['id_provinsi'];
$res = make_query("SELECT id_materi, judul_materi FROM materi WHERE id_provinsi=$id_prov");
while($row = $res->fetch_object()){
    echo "
    <tr>
    <td>$row->judul_materi</td>
    <td>Tarian Adat</td>
    <td><div class='d-grid gap-1'>
    <a href='edit_materi.php?id=$row->id_materi?id_provinsi=$id_prov'><button class='btn btn-primary btn-sm'>Edit</button></a>
    <a href=''><button class='btn btn-danger btn-sm' onclick = 'return confirm (\'Apakah anda yakin ingin menghapus?\')'>Delete</button></a>
    <a href='lihat_materi.php?id_materi=$row->id_materi'><button class='btn btn-primary btn-sm'>Lihat</button></a>
    </div></td>
    </tr>
    ";
}
?>