<?php
if(isset($_POST['hapus'])){
    unlink('../images/materi/'.$_POST['hapus']);
}
?>