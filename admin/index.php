<?php include("../lib/header.php"); ?>
    <title>Beranda Admin</title>
    <style>
        body {
            background-image: url('../images/bg4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <?php require('../validator/loginadmin_v.php'); ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px;">
        </a>
        <div class="text-white" style="font-weight: bold; font-size: 25px;">Beranda Admin</div>
    </nav>

    <div class="container d-flex justify-content-center my-1">
        <div class="card border-success bg-dark w-75 my-3">
            <div class="container d-flex justify-content-center my-5">
                <h1 class="card-title text-white">Panel Admin</h1>
            </div>
            <div class="container d-grid my-3">
                <div class="m-2 d-flex justify-content-center">
                    <a href="add_transaksi.php">
                        <button class="btn btn-success btn-lg">
                            Peminjaman Buku
                        </button>
                    </a>
                </div>
                <div class="m-2 d-flex justify-content-center">
                    <a href="pengembalian.php">
                        <button class="btn btn-success btn-lg">
                            Pengembalian Buku
                        </button>
                    </a>
                </div>
                <div class="m-2 d-flex justify-content-center">
                    <a href="tambah_anggota.php">
                        <button class="btn btn-success btn-lg btn-block">
                            Pendaftaran Anggota
                        </button>
                    </a>
                </div>
                <div class="card-footer bg-transparent border-success my-5">
                    <div class="btn-group d-flex justify-content-center my-2" role="group" aria-label="Basic example">
                        <a href="buku.php">
                            <button class="btn btn-dark mx-2">
                                Daftar Buku
                            </button>
                        </a>
                        <a href="kategori.php">
                            <button class="btn btn-dark mx-2">
                                Daftar Kategori
                            </button>
                        </a>
                        <a href="user_meminjam.php">
                            <button class="btn btn-dark mx-2">
                                Daftar Anggota yang Meminjam
                            </button>
                        </a>
                        <a href="buku_dipinjam.php">
                            <button class="btn btn-dark mx-2">
                                Daftar Buku Dipinjam
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container my-5"></div>
<?php include("../lib/footer.php"); ?>