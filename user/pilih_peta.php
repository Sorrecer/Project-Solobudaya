<?php include("../lib/header.php"); ?>
<title>Pilih Peta</title>
<style>
    body {
        background-image: url('../images/bg2.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 130%;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: auto;
        /* Full width */
        height: auto;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        align-items: center;
        justify-content: center;
    }

    /* Modal Content */
    .modal-content {
        position: relative;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0);
        width: 5%;
        /* Full width */
        height: 5%;
        /* Full height */
    }

    .island-selected {
        position: relative;
        width: 150%;
        height: 150%;
    }

    .sumatera {
        position: relative;
        top: 150px;
        left: 0px;
    }

    .sumatera:hover {
        width: 20%;
        background: url('../images/sumatera-hover.png');
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
    <nav class="navbar navbar-expand-md navbar-white bg-white">
        <a class="navbar-brand" href="beranda.php">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-dark" style="font-weight: bold; font-size: 25px;">Pilih Peta</div>
    </nav>

    <div class="back-button">
        <a href="beranda.php">
            <input type="image" src="../images/button_back.png" width="5%" style="position:absolute; top:90px; left:40px">
        </a>
    </div>

    <div class="container justify-content-center" style="text-align:center;font-weight:bolder;font-size: 50px; color:indigo;padding-top:50px">
        PILIH DAN MULAI BELAJAR!
        <div>
            <a name="sumatera" href="pilih_materi.php"><img class="sumatera" src="../images/sumatera.png" width="20%"></a>
            <a name="jawa" href="pilih_materi.php"><img class="jawa" src="../images/jawa.png" width="20%"></a>
            <a name="kalimantan" href="pilih_materi.php"><img class="kalimantan" src="../images/kalimantan.png" width="20%"></a>
            <a name="sulawesi" href="pilih_materi.php"><img class="sulawesi" src="../images/sulawesi.png" width="20%"></a>
            <a name="ntt" href="pilih_materi.php"><img class="ntt" src="../images/ntt.png" width="20%"></a>
            <a name="papua" href="pilih_materi.php"><img class="papua" src="../images/papua.png" width="20%"></a>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" id="modalContent">
            <p>Some text in the Modal..</p>
        </div>
    </div>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var content = document.getElementById("modalContent");

        // When the user clicks the button, open the modal 
        function open_island(island) {
            modal.innerHTML = '<img class="island-selected" src="../images/' + island.name + '.png" width=20%>';
            modal.style.display = 'block';
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <?php include("../lib/footer.php"); ?>