@include('partials.navbar')
<!doctype html>
<html lang="en">

<head>
  <style>
    #hide {
      display: none !important;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konseling kuy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style-2.css">
</head>

<body>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/crs2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ruang Informasi</h5>
          <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
          <p><a href="#konten" class="btn btn-primary mt3">Read more</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/crs1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ruang Informasi</h5>
          <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
          <p><a href="#konten" class="btn btn-primary mt3">Read more</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="asset/crs3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ruang Informasi</h5>
          <p>Ruang Informasi yang menyediakan <br>artikel seputar kesehatan mental. Artikel diketik langsung <br>oleh parah psikolog yang terdaftar pada sistem</p>
          <p><a href="#konten" class="btn btn-primary mt3">Read more</a></p>
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

  <div class="kontenartikel" id="konten">
    @foreach($artikel as $data)
    <div class="judulartikel card" style="width: 21rem;">
      <img src='{{"/asset/$data->image"}}' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$data->judul}}</h5>
        <p class="card-text">{{$data->konten}}</p>
        <form action="open_artikel" method="POST" enctype="multipart/form-data">
          @csrf
          <div id="hide" class="input mb-3 mt-3">
            <label for="NamaLengkap" class="form-label">id</label>
            <input type="text" class="form-control" id="NamaLengkap" value="{{$data->id}}" name="id">
          </div>
          <button type="submit" class="btn" data-bs-toggle="modal">Preview</button>
        </form>
      </div>
    </div>
    @endforeach
    <!-- <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menonton Film dapat menyebabkan ketenangan</h5>
            <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1">Preview</button>
          </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Tips Healing penghilang stress</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
            </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">lorem ipusm dolor sit anow how peach</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
          </div>
        </div>
      </div>

      <div class="kontenartikel">
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menonton Film dapat menyebabkan ketenangan</h5>
            <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal1">Preview</button>
          </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">Tips Healing penghilang stress</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal2">Preview</button>
            </div>
        </div>
        <div class="judulartikel card" style="width: 21rem;">
          <img src="asset/ruanginformasi.webp" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">lorem ipusm dolor sit anow how peach</h5>
              <p class="card-text">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#prevmodal3">Preview</button>
          </div>
        </div> -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>