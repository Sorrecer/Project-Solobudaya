<?php
require_once('../lib/db_login.php');
$pul = $_GET['id_pulau'];
$res = make_query("SELECT id_materi FROM urutan_materi WHERE id_pulau=$pul ORDER BY urutan ");
echo "<script>var urut=[";
while($row = $res->fetch_object()){
    echo "$row->id_materi,";
}
echo "];</script>";

$res = make_query("SELECT id_materi, judul_materi FROM materi");
echo "<datalist id='materi_list name='materi_list'>";
while($row = $res->fetch_object()){
    echo "<option value=$row->id_materi>$row->id_materi : $row->judul_materi<option>";
}
echo "</datalist>";
?>