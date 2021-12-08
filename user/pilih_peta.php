<?php include("../lib/header.php"); ?>
    <title>Pilih Peta</title>
    <style>
        body {
            background-image: url('../images/bg2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }

        .island {
            /* opacity: 50%; */
            transform: scale(1,1);
        }

        .island:hover {
            /* opacity: 100%; */
            transform: scale(1.5,1.5);
        }

        .sumatera {
            position: relative;
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
            <a name="sumatera" href="pilih_materi.php?id_pulau=1"><img class="island sumatera" src="../images/sumatera.png" width="20%" alt=""></a>
            <a name="jawa" href="pilih_materi.php?id_pulau=3"><img class="island jawa" src="../images/jawa.png" width="20%" alt=""></a>
            <a name="kalimantan" href="pilih_materi.php?id_pulau=2"><img class="island kalimantan" src="../images/kalimantan.png" width="20%" alt=""></a>
            <a name="sulawesi" href="pilih_materi.php?id_pulau=4"><img class="island sulawesi" src="../images/sulawesi.png" width="20%" alt=""></a>
            <a name="ntt" href="pilih_materi.php?id_pulau=5"><img class="island ntt" src="../images/ntt.png" width="20%" alt=""></a>
            <a name="papua" href="pilih_materi.php?id_pulau=6"><img class="island papua" src="../images/papua.png" width="20%" alt=""></a>
        </div>
    </div>

    <?php include("../lib/footer.php"); ?>