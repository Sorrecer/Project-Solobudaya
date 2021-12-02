<?php include("../lib/header.php"); ?>
    <title>Pengaturan Akun</title>
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
            width: 50%;
        }
        .column2 {
            float: right;
            width: 50%;
        }
        .rcorners1 {
            border-radius: 5px;
            background-image: linear-gradient(to bottom, rgba(251, 242, 255, 0.76) 0%, rgba(221, 172, 255, 0.6) 30%, rgba(191, 113, 255, 0.39) 75%);
            padding: 40px;
            width: auto;
            height: auto;
        }
        .btn-grad2 {
            background-image: linear-gradient(to right, #f50076 0%, #f50076 30%, #ff9ccb 75%)
        }
        .btn-grad2 {
            margin: center;
            padding: 8px 32px;
            text-align: center;
            font-weight: bold;
            transition: 0.4s;
            background-size: 250% auto;
            color: white;
            border-radius: 10px;

        }
        .btn-grad2:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }
        .btn-grad {
            background-image: linear-gradient(to right, #56009c 0%, #56009c 30%, #aa3bff 75%)
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
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Pengaturan Akun</div>
    </nav>
    <div class="back-button">
        <a href="beranda.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container" style="width: autopx;">
        <!-- kolom kiri -->
        <div class="column1" style="background-color: rgba(255, 255, 255, 0.5); padding:50px; height: 1000px;">
            <div class="container" style="text-align: center; padding-top: 50px; position: relative; top:0px; left:0px;">
                <img src="../images/profile.png" width="40%" style="position:relative; top:0px; left:0px;" alt="userprofile">
                <a href="ubah_profile.php">
                    <input type="image" src="../images/editprofilicon.png" width="12%" style="position:absolute; top:190px; left:310px;" alt="editprofilicon" name="test" class="btTxt submit" id="test" />
                </a>
                <div style="font-weight: bold; padding-top:50px; font-size:30px">Tsaqif Muhammad Arkan
                <button class="btn-grad btn-center mt-2" style="font-size: 20px; align-content: center; width:50%">Ubah Nama</button>
                </div>
            </div>
            <div class="container my-4" style="text-align: center; padding-top: 100px;">
                <textarea class="form-control" id="deskripsi" name="deskripsi" style="height: 200px; text-align:justify;" placeholder=" Deskripsikan Diri Anda..."></textarea>
                <button class="btn-grad btn-center mt-2" style="font-size: 20px; align-content: center; width:50%">Save Deskripsi</button>
            </div>
        </div>

        <!-- kolom kanan -->
        <div class="column2" style="background-color: rgba(177, 177, 177, 0.5); padding:50px; height: 1000px;">
            <!-- isi kotak   -->
            <!-- bergabung -->
            <div class="container" style="text-align: center; padding-top: 50px; width:100%;">
                <div style="text-align: center; background-color: rgba(255, 255, 255, 0.5); height:50px; font-weight: bold; border-radius: 10px">
                    <img src=" ../images/logo2.png" height="35px" width="25px" alt="logoSB">
                    <class="text-dark" style="font-weight: bold; font-size: 25px; padding-left: 15px;">Bergabung tanggal 2 April 2021</class>
                </div>
            </div>
            <!-- course selesai -->
            <div class="container" style="text-align: center; padding-top: 50px; width:100%;">
                <div style="text-align: center; background-color: rgba(255, 255, 255, 0.5); height:50px;font-weight: bold; border-radius: 10px">
                    <class="text-dark" style="font-weight: bold; font-size: 25px;">69</class>
                        <class="text-dark" style="font-weight: bold; font-size: 25px;">Course telah diselesaikan</class>
                </div>
            </div>

            <div class="container my-4" style="text-align: center; padding-top: 300px;">
                <div class="container" style="text-align: center">
                    <a href="ubah-password.php">
                        <button class="btn-grad  btn-center" style="font-size: 30px; align-content: center; width:80%">
                            Ubah Password
                        </button>
                    </a>
                </div>
                <div class=" container" style="text-align: center; padding-top: 20px">
                    <a href="index.php">
                        <button class="btn-grad2 btn-center" style="font-size: 30px; align-content: center; width:80%">
                            Keluar
                            <img src=" ../images/logo-pintu.png" height="35px" width="25px" style="" alt="logouticon">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../lib/footer.php"); ?>