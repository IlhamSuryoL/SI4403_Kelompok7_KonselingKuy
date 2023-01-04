@extends('partials.navbar')
@section('navbar')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>new Artikel make</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="makingArt">
        <div class="container">
            <p class="promo-title text-center">Buat Artikel</p>
            <div class="formnya">
                <form action="" method="POST" enctype="multipart/form-data">
    
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Judul Artikel</label>
                        <input type="text" name="nama_customer" id="name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Gambar</label>
                        <input type="file" name="email" id="email" class="form-control" placeholder="jancuke38@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label fw-bold">Tulis konten</label>
                        <textarea name="pesan" class="form-control" placeholder="Write your content here..."
                            rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center text-center gap-2 col-6 mx-auto">
                        <!-- <button name="submit" type="submit" class="btn btn-info text-white fw-bold gap-2 d-md-block" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Send
                                </button>
                                <button name="cancel" type="submit" class="btn btn-danger text-white fw-bold" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    cancel
                                </button> -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button name="submit" type="submit" class="btn btn-info text-white fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"~>Unggah</button>
                            <button name="cancel" class="btn btn-danger text-white fw-bold" type="button">Batal</button>
                        </div>
                    </div>
    
                </form>
    
    
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Thanks for order in MyHouse</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

@endsection