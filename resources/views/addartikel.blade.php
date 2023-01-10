@include('partials.navbarpsikolog')
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
        <div class="card addartikel mt-3 mb-3">
            <div class="card-body newartikel">
                <h2 class="card-title text-center">Tambah Artikel Baru</h2>
                <hr>
            </div>
            <div class="card-text formartikel">
                <form action="add_artikel" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="input mb-3 mt-3">
                        <label for="judulartikel" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="judulartikel" placeholder="Tambahkan Judul Artikel" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Tambah Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="image">
                    </div>
                    <div class="input mb-3 mt-3">
                        <label for="Alamat" class="form-label">Tulis Konten</label>
                        <textarea class="form-control" rows="3" id="Alamat" placeholder="Tambahkan konten" name="konten"></textarea>
                    </div>
                    <button type="button" class="btn btnartikel" data-bs-toggle="modal" data-bs-target="#paymentmodal">Submit</button>
                    <a type="button" href="ruanginformasiKonselor" class="btn btn-danger">Cancel</a>
            </div>
        </div>

        <div class="modal" id="paymentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modalpembayaran">
              <div class="modal-body bodypembayaran">
                <img src="asset/centanghijau.png" alt="">
                <h3>Artikel Berhasil Diunggah</h3>
                <button type="submit" class="btn btn-primary">OK</button>
                </form>

              </div>
            </div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>