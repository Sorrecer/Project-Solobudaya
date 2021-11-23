<?php include("../lib/header-beranda.php"); ?>
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
            width: 60%;
        }

        .column2 {
            float: right;
            width: 40%;
        }

        #rcorners1 {
            border-radius: 5px;
            background: rgba(75, 75, 75, 0.5);
            padding: 40px;
            width: auto;
            height: auto;
        }
    </style>

</head>

<body>

    <div class="container my-1">
        <!-- kolom kiri -->
        <div class="column1">
            <div class="row">
                <div class="column" style=" width: 100%; height: auto;padding:50px">
                    <div id="rcorners1">
                        <!-- gambar -->
                        <div>
                            <img src="../peta2.png" width="100%" height="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column" style="height: auto;padding-left: 50px;">
                    <div id="rcorners1">
                        <table class="table table-light">
                            <thead>
                                <tr>
                                    <th colspan="2" style="background-color: purple; color:white" ;>Progress</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>Sumatera</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>Jawa</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>Kalimantan</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>Sulawesi</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>Papua</td>
                                <td>100%</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class=" column" style="height: auto;padding-right: 50px;">
                    <div id="rcorners1"></div>
                </div>
            </div>
        </div>

        <!-- kolom kanan -->
        <div class="column2">
            <!-- form login -->
            <div style="font-size: 20px; color: purple; padding:50px">
                <div id="rcorners1">
                    <!-- isi kotak   -->
                </div>
            </div>
        </div>
</body>

<?php include("../lib/footer.php"); ?>