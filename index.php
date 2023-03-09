<?php
declare(strict_types=1);
require 'vendor/autoload.php';
$secret = 'XVQ2UIGO75XRUKJO';
$link = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('Tiie', $secret, 'tiie-adminpanel');
echo "\n";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin_Panel-Login</title>
  <link rel="stylesheet" href="./vendor/bootstrap/scss/bootstrap.scss">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body style="background-color: white !important;">

  <div class="container">
   
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="card o-hidden border-0 shadow-lg w-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="ml-auto mr-auto">
                    <img src="<?=$link;?>" class="w-100">
                </div>
                
            </div>
          </div>
        </div>

      </div>
      <div class="card shadow w-5 margin-1">
    
        <!-- Card Body -->
        <div class="card-body">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Two-factor Authentication</h6>
          </div>
          <br>
      <h6 class="cl-bl mt-auto mb-auto">Enter your 6 digit Code</h6>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
      <br>
      <button type="button" class="btn btn-primary">Submit</button>
      <br>
        </div>
    </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>