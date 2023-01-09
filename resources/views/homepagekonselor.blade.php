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

      <section id="home">
        <div class="homeleft">
          <h1 class="hometitle">Selamat Datang Konselor <br> Konseling Kuy</h1>
          <p class="homedesc">Teman yang siap menemanimu bercerita dan menenangkanmu disegala kondisi </p>
        </div>
        <div class="homeright">
          <img src="/asset/home2.png" alt="">
        </div>
      </section>

      <hr>

      <section id="program">       
        <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#E1F1FF" fill-opacity="1" d="M0,128L48,154.7C96,181,192,235,288,234.7C384,235,480,181,576,154.7C672,128,768,128,864,154.7C960,181,1056,235,1152,240C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
        <div class="programkk">
        <h1 class="programtitle">Program</h1>
        <div class="programbody">
          <div class="programcard" style="width: 18rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
            <div class="card-body">
              <p class="card-text">Ruang Informasi</p>
            </div>
          </div>
          <div class="programcard" style="width: 18rem;">
            <svg width="250" height="250" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="20" height="21" fill="url(#pattern0)"/>
              <defs>
              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_216_48" transform="translate(0 0.0238095) scale(0.0111111 0.010582)"/>
              </pattern>
              <image id="image0_216_48" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACzUlEQVR4nO2bvW5TMRiGHwnRwNyBHzHRmTsol1AJGLgLysTCjzhbwshNsDFxCQwBARIMsBM1VKISDDATZOEKaJNzbMf5zo/fR/JSuW765NV7bLcBIYQQQgghhBBCiLI4B9wFXgM/gYUGC+/iFbAPjNaVfAX4ILE0heu9d5WcZEkmSnZSsl1dqCaIcnAnRbTrZIkmysE0RfQPiSY2aM5ZNEozSQ4kGpvwSDQSzZBqSolGomk7hUo07YtTddC+VHU0Ek3biVOiaV+SqoMCO1r8QaKNkGgjJNoIiTZCoo2QaCMk2giJLkn0FvAE+ALMgYn/Wsh8y1NcyGvbhJ9sC02WfN8kcr7lmBj7ybbQsmQeRs63HIfGfrItNF/yfQeR8y3HgbGfbAstq4Jx5HzLMTb2k22hLS9vHvEwnLSQ7N4/DEtgIdE2SLQREm3EN+ApsAtsA2eASykLqaPrOU8mJNqIdbd3Q7/r6IToEu46OiG6hLuOTohedsKbR863rpBUbgDv/Cdp3wB7bVfHOHJ+1+86HI9XrHffSnQJdx1Vw9oPLEQPnduBb2SQbIlezVngeS7ZEl2PO3I/C5R9s24hic6XbLcbWYlE/+UecI102bWfEZfo/3cXX9eQ/ZYaJJpTW7g62XWdfUui4/fJscl2h5paSk501dC5oclulFyy6Cpwy9aUbHeoCaJE0VWg5BDZwZQmuoqUnE12SaKrRMlZZJciulpT8vFwh5okShBdZZIctLtYxaLHYwbs9EFyn0XP+iS5r6JnfZPcR9GfgasNv9N14HuGn+XerGwMTfIxI/+X6qMuSGagkv/lxQYkp7yOwVO11cmlsSfJNlxUku247JNd+c4+2vSDT5yuE3VyBBeARxHzR36frSRHsp9QAe5QIyKZduWfzYfMDvDrxMNNsjfAwxXbt5jOFgF8PCF46jvbPSAF+XgJfPIJbro63Ti/Adrs/Ie+YbKPAAAAAElFTkSuQmCC"/>
              </defs>
              </svg>
              
            <div class="card-body">
              <p class="card-text">Riwayat Konseling</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>