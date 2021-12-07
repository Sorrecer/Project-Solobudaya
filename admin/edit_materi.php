<?php include("../lib/header.php"); ?>
<title>Edit Materi</title>
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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="index.php">
                    <img src="../images/logo2.png" width="25" height="35" class="d-inline-block align-top" alt="" style="margin-left: 60px; ">
                    </a>
                </li>
                <li class="nav-item">
                    <div class="text-white" style="font-weight: bold; font-size: 25px;">Edit Materi</div>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <a class="navbar-brand" href="../post/destroy_session.php">
                    <button class="btn-grad2 btn-center" style="margin-right: 60px; ">Keluar</button>
                </a>    
            </ul>
        </div>
    </nav>

    <?php include('../post/admin_edit_materi.php')?>
    <div class="container d-flex justify-content-center">
        <div class="card bg-light w-75 my-4">
            <div class="card-body "><br>
                <div class="container d-flex justify-content-center">
                    <h1>Edit Materi</h1>
                </div>
                <form method="POST" class="container my-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id='.$_GET['id']; ?>" enctype="multipart/form-data">
                <div class="row g-3 justify-content-md-center">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="file_gambar" class="form-label">Upload Materi (.html)</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="file_materi" name="file_materi">
                                </div>
                                <div class="text-danger"><?php if (isset($error_cover)) {echo $error_cover;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                                <div class="text-danger"><?php if (isset($error_judul)) {echo $error_judul;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="idkategori" class="form-label">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                                    <option selected value="">Pilih Kategori..</option>
                                </select>
                                <div class="text-danger"><?php if (isset($error_kategori)) {echo $error_kategori;} ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg mx-2" name="tambah" value="submit">Tambah</button>
                        </div>
                        <div class="form-group">
                            <a href="materi.php" class="btn btn-danger btn-lg mx-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include("../lib/footer.php"); ?>