<?php include("../lib/header.php"); ?>
    <title>Kuis</title>
    <style>
        body {
            background-image: url('../images/bg3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 130%;
        }
        .btn-grad {
            background-image: linear-gradient(to right, #000000 0%, #53346D 30%, #aa3bff 75%)
        }
        .btn-grad {
            margin: center;
            padding: 48px 20px;
            width: 250px;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            transition: 0.4s;
            background-size: 250% auto;
            color: white;
            border-radius: 10px;

        }
        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }
        .column {
            width: 50%;
        }
        .column1 {
            width: 60%;
        }
        .column2 {
            width: 40%;
        }
        .materi {
            background-color: transparent;
            border-radius: 20px;
            border-color: purple;
            border-width: 10px;
            font-weight: bold;
            color: purple;
            padding: 8px 8px;
            font-size: 30px;
            width: auto;
        }
    </style>
</head>

<body>
    <!-- navbar/header -->
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Kuis</div>
    </nav>
    <div class="back-button">
        <a href="pilih_materi.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px" alt="btn_back">
        </a>
    </div>

    <div class="container" style=" background-color: rgba(255, 255, 255, 0.5); padding:50px; height: fit-content">
        <div class="row justify-content-center" style="font-weight:bolder; font-size: 40px;color: purple">Kuis 1 dari 5</div>
        <div class="row" style="margin-top: 200px;">
            <!--ISI MATERI-->
            <!--ISI MATERI-->
            <?php
            require('../get/kuis.php');
            if (isset($kuis)) {
                include("../kuis/$kuis.php");
            } else {
                die('what kuis?');
            }
            ?>
        </div>
        <!-- KOREKSI -->
        <div class="container my-5;" style="height:40px;text-align: center;margin-top: 100px; font-weight:bold;font-size:30px; color:green">

        </div>
        <div class="container my-5;" style="text-align: center;margin-top: 100px; font-weight:bold;font-size:30px; color:green" id="koreksi">
        </div>
        <div class="container" style="background-color:rgba(92, 47, 161, 0.2); text-align: center;">

            <?php
            $anss = array_merge($ans[1], $ans[0]);
            shuffle($anss);
            foreach($anss as $i){
                $t = in_array($i, $ans[1]) ? "kuis_benar.php" : "kuis_salah.php";
                echo "<button name='ansbuttons[]' class='btn-grad my-3' onclick='checkans(\"$i\")'>$i</button>";
            }
            ?>
        </div>
    </div>

    <script>
        var corr = document.getElementById("koreksi");
        var anss = document.getElementsByName("ansbuttons[]");
        const benar = '<img src="../images/benar.png" width="40px" height="40px"> Benar <a href="kuis.php?id_pulau=<?php echo $_GET['id_pulau']?>&p=<?php echo $_GET['p']+1?>"><button class="btn-grad my-3" style="padding:8px 32px; width:fit-content;margin-left:50px">Selanjutnya</button></a>';
        const salah = '<img src="../images/salah.png" width="40px" height="40px"> Salah <a href="pilih_materi.php?id_pulau=<?php echo $_GET['id_pulau']?>"><button class="btn-grad my-3" style="padding:8px 32px; width:fit-content;margin-left:50px">Kembali</button></a>';
        function checkans(ans){
            var anstrue = <?php echo '['; foreach($ans[1] as $i) echo "'$i',"; echo ']'; ?>;
            if(anstrue.includes(ans)){
                corr.innerHTML = benar;
            }
            else{
                corr.innerHTML = salah;
            }
            for(i = 0; i < anss.length; i++){
                anss[i].disabled = true;
            }
        }
    </script>

<?php include("../lib/footer.php"); ?>