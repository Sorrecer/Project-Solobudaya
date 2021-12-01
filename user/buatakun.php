<?php include("../lib/header.php"); ?>
    <title>Buat Akun</title>
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
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="index.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Buat Akun</div>
    </nav>

    <?php include('../validator/buatakun_v.php'); ?>
    <div class="container d-flex justify-content-center my-4">
        <div class="rcorners1">
            <div class="rounded"><br>
                <div class="container d-flex justify-content-center">
                    <h1>Buat Akun</h1>
                </div>
                <form method="POST" class="container my-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username*</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php set_back('username') ?>">
                                <div class="text-danger"><?php if (isset($error_username)) {echo $error_username;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password*</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php set_back('password') ?>">
                                <div class="text-danger"><?php if (isset($error_password)) {echo $error_password;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="konPassword" class="form-label">Konfirmasi Password*</label>
                                <input type="password" class="form-control" id="konPassword" name="konPassword">
                                <div class="text-danger"><?php if (isset($error_konpassword)) {echo $error_konpassword;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-success btn-lg mx-2">Daftar</button>
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="btn btn-danger btn-lg mx-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5"></div>
<?php include("../lib/footer.php"); ?>