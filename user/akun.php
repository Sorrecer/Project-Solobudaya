<?php include("../lib/header-akun.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ajax/script.js"></script>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
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

        #rcorners1 {
            border-radius: 5px;
            background-image: linear-gradient(to bottom, rgba(251, 242, 255, 0.76) 0%, rgba(221, 172, 255, 0.6) 30%, rgba(191, 113, 255, 0.39) 75%);
            padding: 40px;
            width: auto;
            height: auto;
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
            /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="container" style="width: autopx;">
        <!-- kolom kiri -->
        <div class="column1" style="background-color: rgba(255, 255, 255, 0.5); padding:50px; height: 1000px;">
            <div class="container" style="text-align: center; padding-top: 50px;">
                <img src="../profile.png" width="40%">
                <div style="font-weight: bold; padding-top:50px; font-size:30px">Tsaqif Muhammad Arkan</div>
            </div>
            <div class="container my-4" style="text-align: center; padding-top: 100px;">
                <img src="../joshiraku.gif" height="70%">
            </div>
        </div>

        <!-- kolom kanan -->
        <div class="column2" style="background-color: rgba(177, 177, 177, 0.5); padding:50px; height: 1000px;">
            <!-- isi kotak   -->
            <div class="container" style="text-align: center; padding-top: 50px;">
                <img src="../profile.png" width="40%">
                <div style="font-weight: bold; padding-top:50px; font-size:30px">Tsaqif Muhammad Arkan</div>
            </div>
            <div class="container my-4" style="text-align: center; padding-top: 100px;">
                <img src="../joshiraku.gif" height="70%">
            </div>
        </div>
    </div>
    </div>
</body>

<?php include("../lib/footer.php"); ?>