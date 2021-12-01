<?php include("../lib/header.php"); ?>
    <title>Login</title>
    <style>
        body {
            background-image: url('../images/bg1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 110% 140%;
            background-position: -10px -10px;
        }
        .column {
            float: right;
            width: 40%;
        }
        .column1 {
            float: left;
            width: 50%;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .rcorners1 {
            border-radius: 25px;
            background: rgba(245, 238, 255, 0.5);
            padding: 40px;
            width: auto;
            height: auto;
        }
        .sb {
            position: relative;
            left: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .buttonlogin {
            background-color: purple;
            border-radius: 12px;
            color: white;
            padding: 8px 32px;
        }
        .buatakun {
            background-color: purple;
            border-radius: 12px;
            color: white;
            padding: 8px 32px;
            font-size: 15px;
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
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Login</div>
    </nav>
    <div class="container my-1">
    <!-- kolom kiri -->
    <div class="column1">
        <div class="text-white d-block justify-content-center my-4" style="font-size:30px">
            <div>
                <img class="sb" src="../images/sb1.png" width="250" height="60" class="d--block align-top" alt="">
            </div>
            <div class="container d-grid my-1" style="font-size: 70px; left :auto;"><b> Mengenal Budaya <br>Indonesia dengan<br> Menyenangkan</b>
            </div>
            <div>
                <img src="../images/peta1.png" width="700" height="280" class="d--block align-top" alt="">
            </div>
        </div>
    </div>
    <!-- kolom kanan -->
    <div class="column">
        <!-- form login -->
        <div style="font-size: 20px; color: purple; padding:50px">
            <div class="rcorners1">
                <!-- isi kotak   -->
                <div class="container" style="font-size: 25px; text-align: center; font-weight: bold;"> Masuk SoloBudaya dan mulai belajar banyak kebudayaan Indonesia! </div>
                <div class="container my-4"></div>
                <form class="form" name="login">
                    <!-- username -->
                    <label for="username" class="form-label" style="text-align: center;">Username</label><br>
                    <div class="container" style="text-align: center">
                        <input type="text" class="form-control" name="username"><br>
                    </div>
                    <!-- password -->
                    <label for="password" class="form-label" style="text-align: center;">Password</label><br>
                    <div class="container" style="text-align: center">
                        <input type="password" class="form-control" name="password"><br>
                    </div>
                    <div class="container" style="text-align: center">
                        <a href="beranda.php">
                            <button type="submit" class="btn-grad" name="submit" value="submit" style="font-size: 15px;">Login</button>
                        </a>
                    </div>
                </form>
                <div class="container" style="font-size: 15px; text-align: center; font-weight: bold; padding-top: 50px;"> Belum Buat Akun? Yuk Buat Akun! <br>
                <div>
                    <a href="buatakun.php">
                        <button class="btn btn-grad btn-center my-3">Buat Akun</button>
                    </a>
                </div>    
                <div>
                    <a href="../post/login-admin.php" style="color: purple;">Login Admin Klik Disini!</a>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php include("../lib/footer.php"); ?>