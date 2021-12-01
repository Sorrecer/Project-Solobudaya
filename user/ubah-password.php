<?php include("../lib/header.php"); ?>
    <title>Ubah Password</title>
    <style>
        body {
            background-image: url('../images/bg2.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }
        .rcorners1 {
            border-radius: 25px;
            border-width: 5px;
            border-color: purple;
            border-style: dashed;
            background: rgba(245, 238, 255, 0.8);
            padding: 40px;
            width: 60%;
            height: auto;
        }
    </style>
</head>

<body>
    <?php require('../validator/ubah_password_v.php'); ?>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Ubah Password</div>
    </nav>

    <div class="back-button">
        <a href="akun.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container d-flex justify-content-center my-4">
        <div id="rcorners1">
            <div class="rounded"><br>
                <div class="container d-flex justify-content-center">
                    <h1>Ubah Password</h1>
                </div>
                <form method="POST" class="container my-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="username" class="form-label">Password Lama</label>
                                <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="konPassword" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="konPassword" name="konPassword">
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success btn-lg mx-2" style="color:white">Ubah</button>

                        </div>
                        <div class="form-group">
                            <a href="akun.php" class="btn btn-danger btn-lg mx-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div class="container my-5"></div>
<?php include("../lib/footer.php"); ?>