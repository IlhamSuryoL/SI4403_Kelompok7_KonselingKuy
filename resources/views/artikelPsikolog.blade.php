@include('partials.navbarpsikolog')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Konseling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style-2.css">

</head>

<body>

    <section id="content-artikel">
        <div class="container">
            <h3 class="heading fw-bold d-flex justify-content-center mt-5">{{$open_artikel[0]['judul']}}</h3>
            <p class="txtHead text-secondary fs-6 d-flex justify-content-center">
                read it in&nbsp<b>5 minutes</b>
            </p>
            <p class="txtHead mt-3 text-secondary text-center fs-6 d-flex justify-content-center">
                Untuk mendapatkan pengalaman yang baik simaklah <br> artikel ini dengan seksama
            </p>
            <div class="text-center">
                <a href="https://www.instagram.com/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
            </div>
            <div class="text-center mt-5">
           <!-- $a = $open_artikel[0]['image']; -->
                <img src="/asset/{{$open_artikel[0]['image']}}" class="rounded-4" alt="..." width="800px" style="object-fit:contain;">
            </div>
            
            <p class="txtHead text-secondary text-right fs-6 d-flex justify-content-center" style="margin-top:80px;">
            {{$open_artikel[0]['konten']}}
            </p><br><br><br>

        </div>
    </section>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

