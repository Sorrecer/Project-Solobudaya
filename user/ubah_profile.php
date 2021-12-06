<?php include("../lib/header.php"); ?>
<title>Ubah Foto Profil</title>
<style>
    body {
        background-image: url('../images/bg2.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 130%;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Ubah Foto Profil</div>
    </nav>

    <div class="back-button">
        <a href="akun.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container justify-content-center" style="text-align:center;font-weight:bolder;font-size: 50px; color:indigo;padding-top:50px">
        Pilih Foto Profil
    </div>
    <div class="container" style="padding: 20px;text-align:center">
        <div class="column">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
        </div>
        <div class="column">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            <img src="../images/aaa.gif" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
        </div>
        <div class="container my-5 d-flex justify-content-center">
            <div class="form-group">
                <button type="submit" name="ubah" class="btn btn-success btn-lg mx-5" style="color:white; font-size:30px; font-weight:bold">Ubah</button>

            </div>
            <div class="form-group">
                <a href="akun.php" class="btn btn-danger btn-lg mx-5" style="font-size:30px; font-weight:bold">Cancel</a>
            </div>
        </div>
    </div>
    </div>



    <?php include("../lib/footer.php"); ?>