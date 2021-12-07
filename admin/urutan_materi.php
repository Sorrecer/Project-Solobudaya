<?php include("../lib/header.php"); ?>
    <title>Daftar Materi</title>
    <style>
        body {
            background-image: url('../images/bg4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .btn-grad2 {
            background-image: linear-gradient(to right, #f50076 0%, #f50076 30%, #ff9ccb 75%)
        }
        .btn-grad2 {
            margin: center;
            padding: 5px 25px;
            text-align: center;
            font-weight: bold;
            transition: 0.4s;
            background-size: 250% auto;
            color: white;
            border-radius: 10px;
        }
        .btn-grad2:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <script>
        var urut, materi;
    </script>
    <?php require('../validator/loginadmin_v.php'); ?>
    <?php require('../get/admin_urutan_materi.php'); ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php">
                    <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px; ">
                    </a>
                </li>
                <li class="nav-item">
                    <div class="text-white" style="font-weight: bold; font-size: 25px;">Daftar Materi</div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <a class="navbar-brand" href="../post/destroy_session.php">
                    <button class="btn-grad2 btn-center" style="margin-right: 60px; ">Keluar</button>
                </a>    
            </ul>
        </div>
    </nav>

<div class="container d-flex justify-content-center my-5 text-white">
    <h1>Materi SoloBudaya</h1>
</div>

<!-- Content -->
<div class="container my-3">
    <table class="table">
        <tbody id="detail"></tbody>
    </table>
    <!-- Add Materi Button -->
    <div class="container d-flex flex-row-reverse mb-3">
        <button class="btn btn-success">Tambah Urutan</button>
    </div>
    <!-- Tabel -->
    <div class="table-responsive">
        <table class="table align-middle table-light table-bordered table-hover">
            <thead>
                <tr>
                    <th>Urutan</th>
                    <th>ID</th>
                    <th>Judul</th>
                </tr>
            </thead>
            <tbody id="content">
            </tbody>
        </table>
    </div>
    <div class="container d-flex flex-row-reverse mb-3">
        <button class="btn btn-success">Simpan Perubahan</button>
    </div>
</div>
<div class="container my-5"></div>

<script>
    var table = document.getElementById("content");

    function refresh(){
        inner = "";
        c = 0;
        for(i in urut){
            inner += "<tr>";
            inner += "<td>"+c+"</td>";
            inner += "<td>"+urut[i]+"</td>";
            inner += "<td><input list='materi_list' name='urutan[]' value="+urut[i]+"></td>";
            inner += "</tr>";
            c++
        }
        table.innerHTML = inner;
    }
    refresh();
</script>

<?php include("../lib/footer.php"); ?>