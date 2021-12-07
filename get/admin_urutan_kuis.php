<?php
require_once('../lib/db_login.php');
$pul = $_GET['id_pulau'];
$res = make_query("SELECT id_kuis FROM urutan_kuis WHERE id_pulau=$pul ORDER BY urutan ");
echo "<script>var urut=[";
while($row = $res->fetch_object()){
    echo "$row->id_kuis,";
}
echo "];</script>";

$res = make_query("SELECT id_kuis, judul_kuis FROM kuis");
echo "<script>var kuis='";
while($row = $res->fetch_object()){
    echo "<option value=$row->id_kuis>$row->id_kuis : $row->judul_kuis</option>";
}
echo "'</script>";
?>