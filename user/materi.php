<!-- header -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ajax/script.js"></script>
    <title>Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url('../images/bg3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }

        .btn-grad {
            background-image: linear-gradient(to right, #000000 0%, #53346D 30%, #aa3bff 75%)
        }

        .btn-grad {
            margin: center;
            padding: 16px 48px;
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            transition: 0.4s;
            background-size: 250% auto;
            color: white;
            border-radius: 10px;

        }

        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }

        .column {
            width: 50%;
        }

        .column1 {
            width: 60%;
        }

        .column2 {
            width: 40%;
        }

        .materi {
            background-color: transparent;
            border-radius: 20px;
            border-color: purple;
            border-width: 10px;
            font-weight: bold;
            color: purple;
            padding: 8px 8px;
            font-size: 30px;
            width: auto;
        }
    </style>

</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="#">
            <img src="../images/logo2.png" width="25" height="30" class="d-inline-block align-top" alt="" style="margin-left: 30px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Materi</div>
    </nav>

    <div class="container" style=" background-color: rgba(255, 255, 255, 0.5); padding:50px; height: fit-content">
        <div class="row">
            <!--ISI MATERI-->
            <?php
            if (isset($_GET['id_materi'])) {
                $id = $_GET['id_materi'];
                include("../materi/$id.html");
            } else {
                die('what id_materi ?');
            }
            ?>
        </div>
        <div class="container my-5" style="text-align:right;">
            <a href=" #">
                <button class="btn-grad">Berikutnya</button>
            </a>
        </div>
    </div>
</body>
<?php include("../lib/footer.php"); ?>