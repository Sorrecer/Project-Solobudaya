<?php include('../lib/header.php'); ?>

<!--Buat sesuatu yang meng-contain ini-->
<?php
if(isset($_GET['id_materi'])){
    $id = $_GET['id_materi'];
    include("../materi/$id.html"); 
}
else{
    die('what id_materi ?');
}
?>

<?php include('../lib/footer.php'); ?>