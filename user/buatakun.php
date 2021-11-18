<?php include("../lib/header.php"); ?>
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
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center my-4">
        <div id="rcorners1">
            <div class="rounded"><br>
                <div class="container d-flex justify-content-center">
                    <h1>Buat Akun yukz</h1>
                </div>
                <form method="POST" class="container my-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username*</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($username)) {
                                                                                                                    echo $username;
                                                                                                                } ?>">
                                <div class="text-danger"><?php if (isset($error_username)) {
                                                                echo $error_username;
                                                            } ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password*</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php if (isset($password)) {
                                                                                                                        echo $password;
                                                                                                                    } ?>">
                                <div class="text-danger"><?php if (isset($error_password)) {
                                                                echo $error_password;
                                                            } ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 justify-content-md-center">
                        <div class="col-md-9">
                            <div class="mb-4">
                                <label for="konPassword" class="form-label">Konfirmasi Password*</label>
                                <input type="password" class="form-control" id="konPassword" name="konPassword">
                                <div class="text-danger"><?php if (isset($error_konpassword)) {
                                                                echo $error_konpassword;
                                                            } ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <div class="form-group">
                            <button type="submit" name="tambah" class="btn btn-dark btn-lg mx-2">Daftar</button>
                        </div>
                        <div class="form-group">
                            <a href="index.php" class="btn btn-danger btn-lg mx-2">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container my-5"></div>
    <?php include("../lib/footer.php"); ?>