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

    .sb {
      position: relative;
      left: 20px;
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
      <div style="font-size: 25px; color: purple; padding:50px">
        <div id="rcorners1">
          <!-- isi kotak   -->
          <div class="container" style="font-size: 25px;  ; text-align: center;font-weight: bold;"> Masuk SoloBudaya dan mulai belajar banyak kebudayaan Indonesia! </div>
          <!-- username -->
          <div class="container my-3"></div>
          <form class="form" name="login">
            <label for="username" class="form-label">Username</label><br>
            <input type="text" name="username"><br>
            <!-- password -->
            <label for="password" class="form-label">Password</label><br>
            <input type="password" name="password"><br>
            <div class="container" style="text-align: center">
              <button type="submit" class="buttonlogin my-4" name="submit" value="submit">Login</button>
              <div class="container my-3" style="font-size: 15px;  ; text-align: center;font-weight: bold"> Belum Buat Akun? Yuk Buat Akun! </div>
              <button href="#" class="buatakun my-1">Buat Akun</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</body>

<?php include("../lib/footer.php"); ?>