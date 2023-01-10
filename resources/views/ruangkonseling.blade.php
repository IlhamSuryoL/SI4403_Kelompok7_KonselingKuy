@include('partials.navbar')
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
          <div class="ruangkonseling">
            
        <h1 class="rktitle">Ruang Konseling</h1>
        <div class="listkonselor">
        @foreach($psikologs as $data)
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$data->name}}</h5>
                  <p class="card-text">{{$data->name}} adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel</p>
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1{{$data->id}}">Preview</button>
                </div>
            </div>
            <div class="modal" id="prevmodal1{{$data->id}}" tabindex="-1">
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
                <h1>{{$data->name}}</h1>
              </div>
              <div class="modaldesc">
                <h2>Biaya Konsultasi</h2>
                <p>Rp. 40.000</p>
                <h2>Informasi Lainnya</h2>
                <p>{{$data->name}} adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel.</p>
                <p>{{$data->name}} mendapatkan gelar Psikolog Klinis setelah menamatkan pendidikan di Universitas Tarumanagara.</p>
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
                  <form action="bookingkonsul" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Email</label>
                      <input type="email" class="form-control" id="NamaLengkap" value="{{auth()->user()->email}}" name="email">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="NamaLengkap" value="{{auth()->user()->name}}" name="name">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">No Handpone</label>
                      <input type="text" class="form-control" id="NamaLengkap" value="{{auth()->user()->nomor_hp}}" name="nomor_hp">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="tanggal" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal" value="{{auth()->user()->tanggal_lahir}}" name="tanggal">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="Alamat" class="form-label">Keterangan/Keluhan</label>
                      <textarea class="form-control" rows="3" id="Alamat" placeholder="Keterangan/Keluhan" name="keluhan"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
            @endforeach
            

            <!-- <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$psikologs[2]['name']}}</h5>
                    <p class="card-text">{{$psikologs[2]['name']}} adalah seorang Dokter Spesialis Kedokteran Jiwa atau Psikiatri yang aktif melayani pasien di Klinik Anak Mitra.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$psikologs[4]['name']}}</h5>
                    <p class="card-text">{{$psikologs[5]['name']}} adalah seorang Psikologi Klinis yang aktif melayani pasien di RS Hermina Depok.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="listkonselor">
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$psikologs[1]['name']}}</h5>
                  <p class="card-text">{{$psikologs[1]['name']}} adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel</p>
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal4">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$psikologs[3]['name']}}</h5>
                    <p class="card-text">{{$psikologs[3]['name']}} adalah seorang Dokter Spesialis Kedokteran Jiwa atau Psikiatri yang aktif melayani pasien di Klinik Anak Mitra.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal5">Preview</button>
                </div>
            </div>
            <div class="konselor card" style="width: 21rem;">
                <img src="asset/konselor2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$psikologs[5]['name']}}</h5>
                    <p class="card-text">{{$psikologs[5]['name']}} adalah seorang Psikologi Klinis yang aktif melayani pasien di RS Hermina Depok.</p>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal6">Preview</button>
                </div>
            </div>
        </div>
      </div> -->

      <!-- <div class="modal" id="prevmodal1" tabindex="-1">
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
                <h1>{{$data->name}}</h1>
              </div>
              <div class="modaldesc">
                <h2>Biaya Konsultasi</h2>
                <p>Rp. 40.000</p>
                <h2>Informasi Lainnya</h2>
                <p>{{$data->name}} adalah Psikolog Klinis yang aktif melayani pasien di Yayasan Praktek Psikolog Indonesia Bintaro dan Yayasan Praktek Psikolog Indonesia Tangsel.</p>
                <p>{{$data->name}} mendapatkan gelar Psikolog Klinis setelah menamatkan pendidikan di Universitas Tarumanagara.</p>
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
                  <form action="bookingkonsul" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Email</label>
                      <input type="email" class="form-control" id="NamaLengkap" value="{{auth()->user()->email}}" name="email">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="NamaLengkap" value="{{auth()->user()->name}}" name="name">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="NamaLengkap" class="form-label">No Handpone</label>
                      <input type="text" class="form-control" id="NamaLengkap" value="{{auth()->user()->nomor_hp}}" name="nomor_hp">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="tanggal" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal" value="{{auth()->user()->tanggal_lahir}}" name="tanggal">
                    </div>
                    <div class="input mb-3 mt-3">
                      <label for="Alamat" class="form-label">Keterangan/Keluhan</label>
                      <textarea class="form-control" rows="3" id="Alamat" placeholder="Keterangan/Keluhan" name="keluhan"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>