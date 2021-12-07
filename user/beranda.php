<?php include("../lib/header.php"); ?>
<title>Beranda</title>
<style>
    body {
        background-image: url('../images/bg3.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 130%;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        background: #000;
        overflow: hidden;
    }

    section.wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 198px;
        background: url('../images/wave.png');
        background-size: 1600px 198px;
    }

    section .wave.wave1 {
        animation: animate-wave-1 10s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    section .wave.wave2 {
        animation: animate-wave-2 5s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10;
    }

    section .wave.wave3 {
        animation: animate-wave-3 10s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15;
    }

    section .wave.wave4 {
        animation: animate-wave-4 2s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -5s;
        bottom: 20;
    }

    @keyframes animate-wave-1 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1600px;
        }
    }

    @keyframes animate-wave-2 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1600px;
        }
    }

    @keyframes animate-wave-3 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: 1600px;
        }
    }

    @keyframes animate-wave-4 {
        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1600px;
        }
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
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        color: #3E065F;
        /* text-transform: uppercase; */
        letter-spacing: 1px;
        text-decoration: none;
        font-weight: bold;
        font-size: 28px;
        overflow: hidden;
        transition: 0.1s;
        font-family: Verdana;
        background: #8502b909;
    }

    .btn-grad:hover {
        color: #ffffff;
        background: #3E065F;
        box-shadow: 0 0 10px #3E065F, 0 0 40px #3E065F, 0 0 80px #3E065F;
        transition-delay: 0.4s;
    }

    a span {
        position: absolute;
        display: block;
    }

    a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #3E065F);
    }

    a:hover span:nth-child(1) {
        left: 100%;
        transition: 0.4s;
    }

    a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #3E065F);
    }

    a:hover span:nth-child(3) {
        right: 100%;
        transition: 0.4s;
        transition-delay: 0.2s;
    }

    a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #3E065F);
    }

    a:hover span:nth-child(2) {
        top: 100%;
        transition: 0.4s;
        transition-delay: 0.1s;
    }

    a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #3E065F);
    }

    a:hover span:nth-child(4) {
        bottom: 100%;
        transition: 0.4s;
        transition-delay: 0.3s;
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
                            <p style="font-weight: bold;font-size:24px">
                            <?php 
                            $myfile = fopen("../quotes.txt", "r") or die("Unable to open file!");
                            $str = fread($myfile,filesize("../quotes.txt"));
                            fclose($myfile);
                            $arr = explode("\n", $str);
                            shuffle($arr);
                            echo $arr[0]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align: center">
                    <a href="pilih_peta.php" class="btn-grad">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        MULAI BELAJAR
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
                        <div style="font-weight: bold; padding-top:50px; font-size:30px"><?php
                        require_once('../lib/db_login.php');
                        $id = $_SESSION['id_akun'];
                        echo one_res("SELECT nama_user from user WHERE id_user=$id")->nama_user;
                        ?></div>
                    </div>
                    <div class="container my-4" style="text-align: center; padding-top: 150px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </section>
        <?php include("../lib/footer.php"); ?>