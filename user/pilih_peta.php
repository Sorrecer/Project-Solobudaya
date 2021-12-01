<?php include("../lib/header.php"); ?>
    <title>Pilih Peta</title>
    <style>
        body {
            background-image: url('../images/bg2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }
        .sumatera {
            position: relative;
            top: 150px;
            left: 0px;
        }
        .sumatera:hover {
            width: 20%;
            background: url('../images/sumatera-hover.png');
            top: 150px;
            left: 0px;
        }
        .jawa {
            position: relative;
            top: 290px;
            left: -80px;
        }
        .kalimantan {
            position: relative;
            top: 130px;
            left: -290px;
        }
        .sulawesi {
            position: relative;
            top: 150px;
            left: -330px
        }
        .ntt {
            position: relative;
            top: 90px;
            left: 150px;
        }
        .papua {
            position: relative;
            top: -25px;
            left: 170px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Pilih Peta</div>
    </nav>

    <div class="back-button">
        <a href="beranda.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container justify-content-center" style="text-align:center;font-weight:bolder;font-size: 50px; color:indigo;padding-top:50px">
        PILIH DAN MULAI BELAJAR!
        <div>
            <a href="materi/sumatera.php"><img class="sumatera" src="../images/sumatera.png" width="20%"></a>
            <a href="materi/jawa.php"><img class="jawa" src="../images/jawa.png" width="20%"></a>
            <a href="materi/kalimantan.php"><img class="kalimantan" src="../images/kalimantan.png" width="20%"></a>
            <a href="materi/sulawesi.php"><img class="sulawesi" src="../images/sulawesi.png" width="20%"></a>
            <a href="materi/ntt.php"><img class="ntt" src="../images/ntt.png" width="20%"></a>
            <a href="materi/papua.php"><img class="papua" src="../images/papua.png" width="20%"></a>
        </div>
    </div>
<?php include("../lib/footer.php"); ?>