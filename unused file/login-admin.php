<?php include("../lib/header.php"); ?>
    <title>Login Admin</title>
    <style>
        body {
            background-image: url('../images/bg1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 110% 140%;
            background-position: -10px -10px;
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
        <a class="navbar-brand" href="../user/index.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Login Admin</div>
    </nav>

    <!-- <?php include('../validator/loginadmin_v.php'); ?> -->
    <div class="container d-flex justify-content-center my-4">
        <div class="rcorners1">
            <div class="rounded"><br>
                <div class="container d-flex justify-content-center">
                    <h1>Admin Login</h1>
                </div>
                <form method="POST" class="container my-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php set_back('username') ?>">
                                <div class="text-danger"><?php if (isset($error_username)) {echo $error_username;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php set_back('password') ?>">
                                <div class="text-danger"><?php if (isset($error_password)) {echo $error_password;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="form-group">
                            <a href="../admin/index.php">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg mx-2" value="submit">Login</button>
                            </a>
                        </div>
                        <div class="form-group">
                            <a href="../user/index.php" class="btn btn-danger btn-lg mx-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5"></div>
<?php include("../lib/footer.php"); ?>