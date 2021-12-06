<?php include("../lib/header.php"); ?>
<title>Ubah Foto Profil</title>
<style>
    body {
        background-image: url('../images/bg2.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 130%;
    }

    img:hover {
        border: 5px solid #cfa8ff;
    }

    img:active {
        border: 5px solid #6b00b8;
    }

    [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+img {
        cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+img {
        outline: 5px solid #6b00b8;
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
            <label>
                <input type="radio" name="radio" id="p1">
                <img src="../images/p1.png" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label>
            <label>
                <input type="radio" name="radio" id="p2">
                <img src="../images/p2.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label>
            <label>
                <input type="radio" name="radio" id="p3">
                <img src="../images/p3.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label>
            <label>
                <input type="radio" name="radio" id="p4">
                <img src="../images/p4.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label>
        </div>
        <div class="column">
            <label>
                <input type="radio" name="radio" id="p5">
                <img src="../images/p5.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label> <label>
                <input type="radio" name="radio" id="p6">
                <img src="../images/p6.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label> <label>
                <input type="radio" name="radio" id="p7">
                <img src="../images/p7.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label> <label>
                <input type="radio" name="radio" id="p8">
                <img src="../images/p8.jpeg" width="200" height="200" alt="" style="padding: 20px; border-radius:50%">
            </label>
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