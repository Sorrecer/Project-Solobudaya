<?php include("../lib/header.php"); ?>
    <title>Pilih Materi Budaya</title>
    <style>
        body {
            background-image: url('../images/bg3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }
        .column {
            width: 50%;
        }
        .materi {
            background-color: transparent;
            border-radius: 20px;
            border-color: purple;
            border-width: 10px;
            font-weight: bold;
            color: purple;
            padding: 8px 8px;
            font-size: 25px;
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
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Pilih Materi Budaya</div>
    </nav>
    <div class="back-button">
        <a href="pilih_peta.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container" style="width: autopx; background-color: rgba(255, 255, 255, 0.5); padding:50px; height: 1200px">
        <div class="row justify-content-center" style="font-weight:bolder; font-size: 40px;color: purple">Materi Budaya</div>
        <div class="row">
            <!-- kolom kiri -->
            <div class="column1 justify-content-center" style="width:50%;padding:50px;">
                <a href="materi.php"> <button class="materi" style="transform: 200px; margin-left:190px"> TARI <br>
                        <img src="../images/tari.png" width="300" height="300">
                    </button></a>
                <button class="materi" style="align-items: center; justify-content: center; margin-top:30px;margin-left:190px">COMING SOON<br>
                    <img src=" ../images/coming.png" width="300" height="300">
                </button>
            </div>

            <!-- kolom kanan -->
            <div class="column2" style="width:50%;float:right;padding:50px;">
                <a href="materi.php"><button class="materi" style="align-items: center; justify-content: center;"> SENJATA TRADISIONAL<br>
                        <img src=" ../images/senjata.png" width="300" height="300">
                    </button></a>
                <a href="kuis.php"><button class="materi" style="align-items: center; justify-content: center; margin-top:30px;">KUIS MATERI<br>
                        <img src=" ../images/kuis.png" width="300" height="300">
                    </button>
            </div>
        </div>
    </div>

<?php include("../lib/footer.php"); ?>