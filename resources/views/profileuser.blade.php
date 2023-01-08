<!doctype html>
@include('partials.navbar')
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konseling kuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style-2.css">
  </head>
  <body>
      <div class="card addartikel mt-2 mb-3">
        <div class="card-body newartikel">
            <h2 class="card-title text-center">My Profile</h2>
        </div>
        <div class="card-text formartikel">
          <form action="">
            <div class="mb-3">
                <div class="input-group mb-4">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-at"></i></span>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Email">
                </div>
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp"
                  placeholder="Nama">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                <input type="number" class="form-control" id="nohp" aria-describedby="emailHelp"
                  placeholder="Nomor Handphone">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-calendar-days"></i></span>
                <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp"
                  placeholder="Tanggal Lahir">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                  placeholder="Password">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" id="confirm" aria-describedby="emailHelp"
                  placeholder="Confirm Password">
              </div>
              <button type="button" class="btn btnartikel">Edit</button>
          </form>
        </div>
    </div>

      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
