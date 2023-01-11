<!doctype html>
<html lang="en">
<style>
      #hide{
        display: none !important;
      }
    </style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Hello, admin!</title>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-white ">
            <div class="container-fluid">
                <h6 class="navbar-brand me-5" href="#">Selamat Datang, Admin | <b>Konseling Kuy</b></h6>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <form class="d-flex me-4">
                <input class="form-control justify-content-end me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="icon me-4">
                <h5>
                    {{-- logout nya disini --}}
                    <div data-toggle="tooltip" title="Sign Out">
                        <a href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </h5>
            </div>
        </nav>
    </section>

    <section id="menu-admin">
        <div class="container-fluid">
            <div class="row no-gutters mt-5">
                <div class="menu-col col-md-2 mt-2 pe-3 pt-4">
                    <ul class="nav flex-column ms-3 mb-5">
                        <li class="nav-item">
                            <a href="db" class="nav-link text-white">
                                Dashboard</a>
                            <hr class="bg-dark">
                        </li>
                        <li class="nav-item">
                            <a href="dataOrder" class="nav-link text-white">
                                Daftar Konsultasi</a>
                            <hr class="bg-dark">
                        </li>
                        <li class="nav-item">
                            <a href="dataUser" class="nav-link text-white">
                                Daftar User</a>
                            <hr class="bg-dark">
                        </li>
                        <li class="nav-item">
                            <a href="dataPsikolog" class="nav-link text-white">
                                Daftar Psikolog</a>
                            <hr class="bg-dark">
                        </li>
                    </ul>
                </div>

                <div class="col-md-10 p-5 pt-2">
                    <h3>
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                            <path fill-rule="evenodd" d="M0 3.75C0 2.784.784 2 1.75 2h20.5c.966 0 1.75.784 1.75 1.75v16.5A1.75 1.75 0 0122.25 22H1.75A1.75 1.75 0 010 20.25V3.75zm1.75-.25a.25.25 0 00-.25.25V5.5h4v-2H1.75zM7 3.5v2h4v-2H7zm5.5 0v2h10V3.75a.25.25 0 00-.25-.25H12.5zm10 3.5h-21v13.25c0 .138.112.25.25.25h20.5a.25.25 0 00.25-.25V7z">
                            </path>
                        </svg>
                        Dashboard</a>
                        <hr class="bg-dark">
                    </h3>

                    <div class="row text-dark">
                        <div class="card ms-3 me-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h5 class="card-title">Total Riwayat Konsultasi</h5>
                                <div class="display-4">
                                    <h1>{{$transaksi->count();}}</h1>
                                </div>
                                <a href="/dataOrder">
                                    <p class="card-text text-dark">Lihat Detail <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></p>
                                </a>
                            </div>
                        </div>
                        <div class="card ms-3 me-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h5 class="card-title">Total Pendapatan</h5>
                                <div class="display-4">
                                    <h1 id="hide">
                                    {{$i = 0}}
                                        @foreach (@$transaksi as $data)
                                        {{$i += $data->biaya}}
                                        @endforeach
                                    </h1>
                                    <h1>Rp{{$i}}</h1>
                                    
                                </div>
                                <a href="/dataOrder">
                                    <p class="card-text text-dark">Lihat Detail <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></p>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="card me-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h5 class="card-title">Persentase Selesai</h5>
                                <div class="display-4">
                                    <div class="progress mt-4" style="height: 30px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div><br>
                                <a href="/dataOrder">
                                    <p class="card-text text-dark">Lihat Detail <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></p>
                                </a>
                            </div>
                        </div> -->

                        <div class="card me-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h5 class="card-title">Jumlah Psikolog</h5>
                                <div class="display-4">
                                    {{$psikologs->count();}}
                                </div>
                                <a href="/dataPsikolog">
                                    <p class="card-text text-dark">Lihat Detail <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                            <polyline points="13 17 18 12 13 7"></polyline>
                                            <polyline points="6 17 11 12 6 7"></polyline>
                                        </svg></p>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>