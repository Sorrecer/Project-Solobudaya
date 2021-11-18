<?php include("../lib/header.php"); ?>
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
      float: right;
      width: 40%;
    }

    .column1 {
      float: left;
      width: 50%;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    #rcorners1 {
      border-radius: 25px;
      background: rgba(245, 238, 255, 0.5);
      padding: 40px;
      width: auto;
      height: auto;
    }

    A {
      text-decoration: none;
    }

    .sb {
      position: relative;
      left: 20px;
    }

    .form-label {
      font-weight: bold;
    }

    .buttonlogin {
      background-color: purple;
      border-radius: 12px;
      color: white;
      padding: 8px 32px;
    }

    .buatakun {
      background-color: purple;
      border-radius: 12px;
      color: white;
      padding: 8px 32px;
      font-size: 15px;
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

  <div class="container my-1">
    <!-- kolom kiri -->
    <div class="column1">
      <div class="text-white d-block justify-content-center my-4" style="font-size:30px">
        <div>
          <img class="sb" src="../sb1.png" width="250" height="60" class="d--block align-top" alt="">
        </div>
        <div class="container d-grid my-1  " style="font-size: 70px; left :auto;"><b> Mengenal Budaya <br>Indonesia dengan<br> Menyenangkan</b>
        </div>
        <div>
          <img src="../peta1.png" width="700" height="280" class="d--block align-top" alt="">
        </div>
      </div>
    </div>

    <!-- kolom kanan -->
    <div class="column">
      <!-- form login -->
      <div style="font-size: 20px; color: purple; padding:50px">
        <div id="rcorners1">
          <!-- isi kotak   -->
          <div class="container" style="font-size: 25px;  ; text-align: center;font-weight: bold;"> Masuk SoloBudaya dan mulai belajar banyak kebudayaan Indonesia! </div>
          <!-- username -->
          <div class="container my-5"></div>
          <form class="form" name="login">
            <label for="username" class="form-label" style="text-align: center;">Username</label><br>
            <div class="container" style="text-align: center">
              <input type="text" class="form-control" name="username"><br>
            </div>
            <!-- password -->
            <label for="password" class="form-label" style="text-align: center; left: 20px">Password</label><br>
            <div class="container" style="text-align: center">
              <input type="password" class="form-control" name="password"><br>
            </div>
            <div class="container" style="text-align: center">
              <button type="submit" class="btn-grad" name="submit" value="submit" style="font-size: 15px;">Login</button>
          </form>
        </div>
        <div class="container" style="font-size: 15px;text-align: center;font-weight: bold; padding-top: 50px;"> Belum Buat Akun? Yuk Buat Akun! <br>
          <a href="buatakun.php">
            <button class="btn btn-grad btn-center my-3">
              Buat Akun
            </button>
          </a>
        </div>
      </div>
    </div>
</body>

<?php include("../lib/footer.php"); ?>