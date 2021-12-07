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

    <div class="container" style="width: autopx; background-color: rgba(255, 255, 255, 0.5); padding:50px; height: 1000px">
        <div class="row justify-content-center" style="font-weight:bolder; font-size: 40px; color: purple">Materi Pulau <?php require_once('../lib/db_login.php'); echo one_res("SELECT nama_pulau FROM pulau WHERE id_pulau=".$_GET['id_pulau'])->nama_pulau?></div>
        <div class="row">
            <!-- kolom kiri -->
            <div class="column1 justify-content-center" style="width:50%;padding:50px;">
                <a href="materi.php?id_pulau=<?php echo $_GET['id_pulau']?>&p=0">
                    <button class="materi" style="align-items: center; justify-content: center; margin-top:120px; transform: 200px; margin-left:190px"> MATERI <br>
                        <img src="../images/senjata.png" width="300" height="300" alt="">
                    </button>
                </a>
            </div>
            <!-- kolom kanan -->
            <div class="column2 justify-content-center" style="width:50%;padding:50px;">
                <a href="kuis.php">
                    <button class="materi" style="align-items: center; justify-content: center; margin-top:120px;"> KUIS <br>
                        <img src=" ../images/kuis.png" width="300" height="300" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>

<?php include("../lib/footer.php"); ?>