<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ajax/script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../bg1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    $path = $_SERVER['REQUEST_URI'];
    if(strpos($path, "/admin/") !== false){
        include("../lib/admin_login_redirect.php");
    }
    elseif(strpos($path, "/user/") !== false){
        include("../lib/login_redirect.php");
    }
    if (isset($_SESSION['username'])) {
        if ($_SESSION['kategori'] == 'petugas') {
            include("../lib/header-admin.php");
        } elseif ($_SESSION['kategori'] == 'anggota') {
            include("../lib/header-user.php");
        }
    } else {
        include("../lib/header-visitor.php");
    }
    ?>