<!-- header -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ajax/script.js"></script>
    <title>Pilih Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

        .materi {
            background-color: transparent;
            border-radius: 20px;
            border-color: purple;
            border-width: 10px;
            font-weight: bold;
            color: purple;
            padding: 8px 8px;
            font-size: 25px;
            width: auto;
        }
    </style>

</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="#">
            <img src="../images/logo2.png" width="25" height="30" class="d-inline-block align-top" alt="" style="margin-left: 30px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Pilih Materi Budaya</div>
    </nav>

    <div class="container" style="width: autopx; background-color: rgba(255, 255, 255, 0.5); padding:50px; height: 1200px">
        <div class="row justify-content-center" style="font-weight:bolder; font-size: 40px;color: purple">Materi Budaya</div>
        <div class="row">
            <!-- kolom kiri -->
            <div class="column1 justify-content-center" style="width:50%;padding:50px;">
                <a href="materi.php"> <button class="materi" style="transform: 200px; margin-left:190px"> TARI <br>
                        <img src="../images/tari.png" width="300" height="300">
                    </button></a>
                <button class="materi" style="align-items: center; justify-content: center; margin-top:30px;margin-left:190px">COMING SOON<br>
                    <img src=" ../images/coming.png" width="300" height="300">
                </button>
            </div>

            <!-- kolom kanan -->
            <div class="column2" style="width:50%;float:right;padding:50px;">
                <a href="materi.php"><button class="materi" style="align-items: center; justify-content: center;"> SENJATA TRADISIONAL<br>
                        <img src=" ../images/senjata.png" width="300" height="300">
                    </button></a>
                <a href="kuis.php"><button class="materi" style="align-items: center; justify-content: center; margin-top:30px;">KUIS MATERI<br>
                        <img src=" ../images/kuis.png" width="300" height="300">
                    </button>
            </div>
        </div>
    </div>
</body>

<?php include("../lib/footer.php"); ?>