<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ajax/script.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../images/bg1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 110% 140%;
            background-position: -10px -10px;
        }
    </style>

</head>

<body>
    <!-- php pada setiap header -->
    <?php
        session_start();
    ?>

    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="#">
            <img src="../images/logo1.png" width="150" height="30" class="d-inline-block align-top" alt="" style="margin-left: 30px;">
        </a>
    </nav>