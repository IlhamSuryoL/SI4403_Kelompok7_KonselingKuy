<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konseling kuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="konselor.css">
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

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner cover">
          <div class="carousel-item iteminformasi active">
            <img src="crs2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption captinfo d-none d-md-block">
              <h5>Ruang Informasi</h5>
              <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
              <p><a href="#" class="btn btn-primary mt3">Read more</a></p>
            </div>
          </div>
          <div class="carousel-item iteminformasi">
            <img src="/asset/crs1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption captinfo d-none d-md-block">
              <h5>Ruang Informasi</h5>
              <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
              <p><a href="#" class="btn btn-primary mt3">Read more</a></p>
            </div>
          </div>
          <div class="carousel-item iteminformasi">
            <img src="/asset/crs3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption captinfo d-none d-md-block">
              <h5>Ruang Informasi</h5>
              <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
              <p><a href="#" class="btn btn-primary mt3">Read more</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="btnaddart">
        <hr>
        <button type="button" class="btn">+ Buat Artikel Baru</button>
        <hr>
      </div>

      <div class="kontenartikel">
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/artikel1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menonton Film dapat menyebabkan ketenangan</h5>
            <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1">Preview</button>
          </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Tips Healing penghilang stress</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
            </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">lorem ipusm dolor sit anow how peach</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
          </div>
        </div>
      </div>

      <div class="kontenartikel">
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/artikel1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menonton Film dapat menyebabkan ketenangan</h5>
            <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1">Preview</button>
          </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Tips Healing penghilang stress</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
            </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">lorem ipusm dolor sit anow how peach</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>