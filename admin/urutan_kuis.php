<?php include("../lib/header.php"); ?>
    <title>Daftar Kuis</title>
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
    <?php require('../validator/loginadmin_v.php'); ?>
    <?php require('../get/admin_urutan_kuis.php'); ?>
    <?php require('../post/admin_save_urutan_kuis.php'); ?>
    <script>
        var urut, kuis;
    </script>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php">
                    <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px; ">
                    </a>
                </li>
                <li class="nav-item">
                    <div class="text-white" style="font-weight: bold; font-size: 25px;">Daftar Kuis</div>
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
    <h1>Kuis SoloBudaya</h1>
</div>

<!-- Content -->
<div class="container my-3">
    <table class="table">
        <tbody id="detail"></tbody>
    </table>
    <!-- Add Kuis Button -->
    <div class="container d-flex flex-row-reverse mb-3">
        <button class="btn btn-success" onclick="add()">Tambah Urutan</button>
    </div>
    <div class="container d-flex flex-row-reverse mb-3">
        <button class="btn btn-success" onclick="remove()">Hapus Urutan</button>
    </div>
    <!-- Tabel -->
    <form method="POST">
        <div class="table-responsive">
            <table class="table align-middle table-light table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th id="label">Kuis</th>
                    </tr>
                </thead>
                <tbody id="content">
                </tbody>
            </table>
        </div>
        <div class="container d-flex flex-row-reverse mb-3">
            <button type="submit" name="submit" value='save' class="btn btn-success">Simpan Perubahan</button>
        </div>
    </form>
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
            inner += "<td><select list='kuis_list' name='urutan[]' aria-labelledby='label'>"+kuis+"</select></td>";
            inner += "</tr>";
            c++;
        }
        table.innerHTML = inner;

        var urutan = document.getElementsByName("urutan[]");
        for(i in urut){
            for(j=0; j < urutan[i].length; j++){
                urutan[i][j].selected = urutan[i][j].value == urut[i];
            }
        }
    }
    refresh();

    function add(){
        var n = table.children.length;
        var A = table.insertRow();
        A.innerHTML = "<td>"+n+"</td><td><select list='kuis_list' name='urutan[]' aria-labelledby='label'>"+kuis+"</select></td>"
    }
    function remove(){
        table.lastChild.remove()
    }
</script>

<?php include("../lib/footer.php"); ?>