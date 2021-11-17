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
      padding: 20px;
      width: 400px;
      height: 600px;
    }

    .sb {
      position: relative;
      left: 20px;
    }
  </style>

</head>

<body>
  <!-- kolom kiri -->
  <div class="container my-1">
    <div class="column1">
      <div class="text-white d-block justify-content-center my-4" style="font-size:30px">
        <div>
          <img class="sb" src="../sb1.png" width="250" height="60" class="d--block align-top" alt="">
        </div>
        <div class="container d-grid my-1  " style="font-size: 70px; left :auto;"><b> Mengenal Budaya <br>Indonesia dengan<br> Menyenangkan</b>
        </div>
        <div>
          <img src="../peta1.png" width="500" height="200" class="d--block align-top" alt="">
        </div>
      </div>
    </div>

    <!-- kolom kanan -->
    <div class="column">
      <!-- form login -->
      <div class="text-white d-flex justify-content-center my-4" style="font-size: 40px">
        <div id="rcorners1">
          <!-- isi kotak   -->
        </div>
      </div>
    </div>
  </div>
</body>

<?php include("../lib/footer.php"); ?>