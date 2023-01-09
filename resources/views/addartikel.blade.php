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

        <div class="card addartikel mt-3 mb-3">
            <div class="card-body newartikel">
                <h2 class="card-title text-center">Tambah Artikel Baru</h2>
                <hr>
            </div>
            <div class="card-text formartikel">
                <form action="">
                    <div class="input mb-3 mt-3">
                        <label for="judulartikel" class="form-label">Judul Artikel</label>
                        <input type="email" class="form-control" id="judulartikel" placeholder="Tambahkan Judul Artikel" name="judulartikel">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Tambah Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="input mb-3 mt-3">
                        <label for="Alamat" class="form-label">Tulis Konten</label>
                        <textarea class="form-control" rows="3" id="Alamat" placeholder="Tambahkan konten" name="Alamat KTP"></textarea>
                    </div>
                    <button type="button" class="btn btnartikel" data-bs-toggle="modal" data-bs-target="#paymentmodal">Submit</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>

        <div class="modal" id="paymentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modalpembayaran">
              <div class="modal-body bodypembayaran">
                <img src="asset/centanghijau.png" alt="">
                <h3>Artikel Berhasil Diunggah</h3>
                <button type="button" class="btn btn-primary">OK</button>
              </div>
            </div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>