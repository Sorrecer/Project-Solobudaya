<?php include("../lib/header.php"); ?>
    <title>Materi</title>
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
    <!-- navbar/header -->
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Materi</div>
    </nav>
    <div class="back-button">
        <a href="pilih_materi.php?id_pulau=<?php echo $_GET['id_pulau']?>">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px" alt="btn_back">
        </a>
    </div>

    <div class="container" style=" background-color: rgba(255, 255, 255, 0.5); padding:50px; height: fit-content">
        <div class="row">
            <!--ISI MATERI-->
            <?php
            require('../get/materi.php');
            if (isset($materi)) {
                include("../materi/$materi.html");
            } else {
                die('what materi?');
            }
            ?>
        </div>
        <div class="container my-5" style="text-align:right;">
            <a href="../user/materi.php?id_pulau=<?php echo $_GET['id_pulau']?>&p=<?php echo $_GET['p']+1?>">
                <button class="btn-grad">Berikutnya</button>
            </a>
        </div>
    </div>

<?php include("../lib/footer.php"); ?>