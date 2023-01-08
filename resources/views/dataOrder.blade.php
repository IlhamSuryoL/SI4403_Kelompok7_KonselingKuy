<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Hello, Admin!</title>
</head>

<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="#">Selamat Datang, Admin | <b>MyHouse</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <form class="d-flex me-4">
                <input class="form-control justify-content-end me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="icon me-4">
                <a href="index.php">
                    <h5>
                        <div data-toggle="tooltip" title="Sign Out">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path fill-rule="evenodd" d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 010 1.5h-2.5a.25.25 0 00-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 010 1.5h-2.5A1.75 1.75 0 012 13.25V2.75zm10.44 4.5H6.75a.75.75 0 000 1.5h5.69l-1.97 1.97a.75.75 0 101.06 1.06l3.25-3.25a.75.75 0 000-1.06l-3.25-3.25a.75.75 0 10-1.06 1.06l1.97 1.97z">
                                </path>
                            </svg>
                        </div>
                    </h5>
                </a>
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
                                Daftar Order</a>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Daftar Order</a>
                        <hr class="bg-dark">
                    </h3>

                    <section id="table">
                        <div class="container-fluid">

                            <table class="table">
                                <thead>
                                    <tr class="table-dark text-center">
                                        <th scope="col">Id Number</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Type House</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr class="table-light text-center">
                                            <!-- <th scope="row">1</th> -->
                                            <td><a href="action/modal-admin.php?id=" class="btn btn-info">Detail</a>
                                                <a href="action/delete.php?id=" data-toggle="tooltip" title="Delete" class="btn text-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>


                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- <div class="row text-dark">
                        <div class="card ms-3" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <h5 class="card-title">Jumlah Pemesan</h5>
                                <div class="display-4">
                                    1.200
                                </div>
                                <a href=""><p class="card-text text-dark">Lihat Detail <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right">
                                    <polyline points="13 17 18 12 13 7"></polyline>
                                    <polyline points="6 17 11 12 6 7"></polyline>
                                </svg></p></a>
                            </div>

                        </div>
                    </div> -->


                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>