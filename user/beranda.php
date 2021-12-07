<?php include("../lib/header.php"); ?>
<title>Beranda</title>
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

    .column1 {
        float: left;
        width: 60%;
    }

    .column2 {
        float: right;
        width: 40%;
    }

    .rcorners1 {
        border-radius: 5px;
        background-image: linear-gradient(to bottom, rgba(251, 242, 255, 0.76) 0%, rgba(221, 172, 255, 0.6) 30%, rgba(191, 113, 255, 0.39) 75%);
        padding: 40px;
        width: auto;
        height: auto;
    }

    .btn-grad {
        background-image: linear-gradient(to right, #000000 0%, #53346D 30%, #aa3bff 75%)
    }

    .btn-grad {
        margin: center;
        padding: 8px 32px;
        text-align: center;
        font-weight: bold;
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
</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="#">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Beranda</div>
    </nav>

    <div class="container" style="width: autopx;">
        <!-- kolom kiri -->
        <div class="column1">
            <div class="row">
                <div class="column" style="text-align:center; width: 100%; height: auto;padding:50px">
                    <div class="rcorners1">
                        <!-- gambar -->
                        <div>
                            <img class="sb" src="../images/sb1.png" width="250" height="60" class="d--block align-top" alt="">
                            <p style="font-weight: bold;font-size:24px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center">
                    <a href="pilih_peta.php">
                        <button class="btn btn-grad btn-center" style="font-size: 30px; align-content: center;">
                            MULAI BELAJAR
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="column" style=" width: 100%; height: auto;padding:50px">
                    <!-- gambar -->
                    <div>
                        <img src="../images/peta1.png" width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>

        <!-- kolom kanan -->
        <div class="column2" style="height: 100%;">
            <!-- form login -->
            <div style="font-size: 20px; color: purple;">
                <div style=" background-image: linear-gradient(to bottom, rgba(251, 242, 255, 1 ) 0%, rgba(221, 172, 255, 1) 30%); padding:50px">
                    <!-- isi kotak   -->
                    <div class="container" style="text-align: center;padding-top:150px">
                        <a href="akun.php">
                            <button class="btn btn-info btn-center" style="font-size: 20px; align-content: center; color:white; border-radius: 10px">
                                Pengaturan Akun
                            </button>
                        </a>
                    </div>
                    <div class="container" style="text-align: center; padding-top: 50px;">
                        <img src="../images/profile.png" width="40%">
                        <div style="font-weight: bold; padding-top:50px; font-size:30px">Tsaqif Muhammad Arkan</div>
                    </div>
                    <div class="container my-4" style="text-align: center; padding-top: 150px;">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../lib/footer.php"); ?>