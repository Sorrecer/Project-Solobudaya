<?php include("../lib/header-buat-akun.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buat Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #rcorners1 {
            border-radius: 25px;
            border-width: 5px;
            border-color: purple;
            border-style: dashed;
            background: rgba(245, 238, 255, 0.8);
            padding: 40px;
            width: 60%;
            height: auto;
        }

        #sumatera {
            position: relative;
            top: 150px;
            left: 0px;
        }

        #sumatera:hover {
            width: 20%;
            background: url('../sumatera-hover.png');
            top: 150px;
            left: 0px;
        }

        .jawa {
            position: relative;
            top: 290px;
            left: -80px;
        }

        .kalimantan {
            position: relative;
            top: 130px;
            left: -290px;
        }

        .sulawesi {
            position: relative;
            top: 150px;
            left: -330px
        }

        .ntt {
            position: relative;
            top: 90px;
            left: 150px;
        }

        .papua {
            position: relative;
            top: -25px;
            left: 170px;
        }
    </style>
</head>

<body>
    <div class="container justify-content-center" style="text-align:center;font-weight:bolder;font-size: 50px; color:indigo;padding-top:50px">
        PILIH DAN MULAI BELAJAR!
        <div>
            <a href="materi/sumatera.php"><img id="sumatera" src="../images/sumatera.png" width="20%"></a>
            <a href="materi/jawa.php"><img class="jawa" src="../images/jawa.png" width="20%"></a>
            <a href="materi/kalimantan.php"><img class="kalimantan" src="../images/kalimantan.png" width="20%"></a>
            <a href="materi/sulawesi.php"><img class="sulawesi" src="../images/sulawesi.png" width="20%"></a>
            <a href="materi/ntt.php"><img class="ntt" src="../images/ntt.png" width="20%"></a>
            <a href="materi/papua.php"><img class="papua" src="../images/papua.png" width="20%"></a>
        </div>
    </div>
    <?php include("../lib/footer.php"); ?>