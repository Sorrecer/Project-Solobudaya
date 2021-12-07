<?php
$f = array_diff(scandir('../images/materi'), array('.', '..'));
foreach($f as $i){
    echo "<tr><td><a href='../images/materi/$i'>$i</a></td>";
    echo "<td><a href=''><button type='submit' name='hapus' value='$i' onclick='return confirm(\"Apakah anda yakin menghapus $i?\")'>Hapus</button></a></td></tr>";
}
?>