<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konseling kuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style-2.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Konseling Kuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto mb-1">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jadwal Konselor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Program</a>
            </li>
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Nama
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <div class="card payment mt-3 mb-3">
          <h2 class="text-center">QR Payment</h2>
          <hr>
            <div class="card-body invoice">
                <div class="card-title invoice-left">
                  <h2>IdInvoice</h2>
                  <h2>IdDoctor</h2>
                  <h1>Total Pembayaran</h1>
                </div>  
                <div class="card-title invoice-right">
                  <h2>BOK001</h2>
                  <h2>Dok9562</h2>
                  <h1>Rp. 40.000</h1>
                </div>
            </div>
            <div class="card-text qrcode">
                <img src="asset/qrcode.png" alt="">
                <hr>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentmodal">Done</button>
        </div>

        <div class="modal" id="paymentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modalpembayaran">
              <div class="modal-body bodypembayaran">
                <img src="asset/centanghijau.png" alt="">
                <h3>Pembayaran Berhasil</h3>
                <button type="button" class="btn btn-primary">OK</button>
              </div>
            </div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>