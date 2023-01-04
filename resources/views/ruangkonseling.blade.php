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
              <li class="nav-item dropdown">
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

      <div class="ruangkonseling">
        <h1 class="rktitle">Ruang Konseling</h1>
        <div class="listkonselor">
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gunawan S.Psi., M.Psi., Psikolog</h5>
                  <p class="card-text">Adib Setiawan, S.Psi., M.Psi., Psikolog adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel</p>
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amalina Salsabil, M.Psi., Psikolog</h5>
                    <p class="card-text">Amalina Salsabil, M.Psi., Psikolog adalah seorang Dokter Spesialis Kedokteran Jiwa atau Psikiatri yang aktif melayani pasien di Klinik Anak Mitra.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Adelina Sarif, Psa Mpsi</h5>
                    <p class="card-text">Adelina Syarif, S.Psi., M.Psi adalah seorang Psikologi Klinis yang aktif melayani pasien di RS Hermina Depok.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="listkonselor">
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Gunawan S.Psi., M.Psi., Psikolog</h5>
                  <p class="card-text">Adib Setiawan, S.Psi., M.Psi., Psikolog adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel</p>
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal4">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amalina Salsabil, M.Psi., Psikolog</h5>
                    <p class="card-text">Amalina Salsabil, M.Psi., Psikolog adalah seorang Dokter Spesialis Kedokteran Jiwa atau Psikiatri yang aktif melayani pasien di Klinik Anak Mitra.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal5">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Adelina Sarif, Psa Mpsi</h5>
                    <p class="card-text">Adelina Syarif, S.Psi., M.Psi adalah seorang Psikologi Klinis yang aktif melayani pasien di RS Hermina Depok.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal6">Preview</button>
                </div>
            </div>
        </div>
      </div>

      <div class="modal" id="prevmodal1" tabindex="-1">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Profile Konselor</h5>
              <h5 class="modal-title" style="margin-left: 435px;">Reservasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bodyprev">
              <div class="prevleft">
              <div class="modalprofile">
                <img src="asset/konselor1.png" alt="" width="400px">
                <h1>Gunawan S.Psi., M.Psi., Psikolog</h1>
              </div>
              <div class="modaldesc">
                <h2>Biaya Konsultasi</h2>
                <p>Rp. 40.000</p>
                <h2>Informasi Lainnya</h2>
                <p>Gunawan, S.Psi., M.Psi., Psikolog adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel.</p>
                <p>Gunawan, S.Psi., M.Psi., Psikolog mendapatkan gelar Psikolog Klinis setelah menamatkan pendidikan di Universitas Tarumanagara.</p>
                <p>Beliau dapat memberikan layanan konsultasi psikologis.
                  Harga yang tertera merupakan biaya konsultasi dokter, belum termasuk tindakan lain dan biaya admin dari RS/Klinik (apabila ada)</p>
                <h2>Jam Operasional</h2>
                <p>09.30 - 21.00, Senin s/d jumat</p>
                <h2>Kondisi dan Minat Klinis :</h2>
                <ul>
                  <li>Gangguan kecemasan (OCD, fobia, serangan panik, atau PTSD)</li>
                  <li>Gangguan mood (depresi atau bipolar)</li>
                  <li>Kecanduan (obat-obatan, alkohol ataupun judi)</li>
                  <li>Gangguan kepribadian</li>
                  <li>Skizofrenia atau gangguan psikosis</li>
                  <li>Fobia atau trauma</li>
                  <li>Konflik pasien baik dengan pasangan, keluarga, teman ataupun orang lain</li>
                </ul>
              </div>
              </div>
              <div class="formreserv">
                  <form action="" method="">
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Email</label>
                      <input type="email" class="form-control" id="NamaLengkap" placeholder="Email" name="Nama Lengkap">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="NamaLengkap" placeholder="Nama Kamu" name="Nama Lengkap">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">No Handpone</label>
                      <input type="text" class="form-control" id="NamaLengkap" placeholder="Nomor Handphone" name="Nama Lengkap">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Tanggal Konsultasi</label>
                      <input type="date" class="form-control" id="NamaLengkap" placeholder="Tanggal Konsultasi" name="Nama Lengkap">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="Alamat" class="form-label">Keterangan/ Keluhan</label>
                      <textarea class="form-control" rows="3" id="Alamat" placeholder="Keterangan/Keluhan" name="Alamat KTP"></textarea>
                    </div>
                    <button type="button" class="btn">Submit</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>