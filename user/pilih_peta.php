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

        .sumatera {
            position: relative;
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
            <img class="sumatera" src="../sumatera.png" width="20%">
            <img class="jawa" src="../jawa.png" width="20%">
            <img class="kalimantan" src="../kalimantan.png" width="20%">
            <img class="sulawesi" src="../sulawesi.png" width="20%">
            <img class="ntt" src="../ntt.png" width="20%">
            <img class="papua" src="../papua.png" width="20%">
        </div>
    </div>
    <?php include("../lib/footer.php"); ?>