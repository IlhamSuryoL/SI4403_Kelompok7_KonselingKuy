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
    

      <section id="home">
        <div class="homeleft">
          <h1 class="hometitle">Konseling Kuy</h1>
          <p class="homedesc">Teman yang siap menemanimu bercerita dan menenangkanmu disegala kondisi </p>
        </div>
        <div class="homeright">
          <img src="asset/home.png" alt="">
        </div>
      </section>

      <hr>

      <section id="program">       
        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#E1F1FF" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,154.7C672,128,768,128,864,154.7C960,181,1056,235,1152,240C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <div class="programkk">
        <h1 id="programtext" class="programtitle">Program</h1>
        <div class="programbody">
          <div class="programcard" style="width: 18rem;">
            <a href="read_artikeluser">
              <img src="asset/ruanginformasi.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <p class="card-text">Ruang Informasi</p>
              
            </div>
          </div>
          <div class="programcard" style="width: 18rem;">
            <a href="/read_psikolog">
              <img src="asset/ruangkonseling.png" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <p class="card-text">Ruang Konseling</p>
            </div>
          </div>
        </div>
        </div>
      </section>

      <footer class="foothome">
        <div class="footatas">
        <h1>KONSELING KUY</h1>
        <p>Konseling kuy, web konseling terpercaya, yang dapat menjadi <br>pilihan anda bercerita.</p>
        </div>
      </footer>
@include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>