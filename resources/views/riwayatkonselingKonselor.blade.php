<!doctype html>
@include('partials.navbarPsikolog')
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
    <link rel="stylesheet" href="konselor.css">
</head>

<body>

    <div class="card addartikel mt-2 mb-3">
        <div class="card-body newartikel">
            <h2 class="card-title text-center">Riwayat Konseling {{auth()->user()->name}}</h2>
        </div>
        <div class="card-text formartikel">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Nama Psikolog</th>
                        <th scope="col">Jadwal Konseling</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($table_konsulKonselor as $data)
                    <tr>

                        <td scope="col">{{$data->id}}</td>
                        <td scope="col">{{$data->name_psikolog}}</td>
                        <td scope="col">{{$data->created_at}}</td>
                        <td scope="col">{{$data->biaya}}</td>
                        <td scope="col">{{$data->keluhan}}</td>
                        <td scope="col">{{$data->status}}</td>
                        <td>
                            <form action="/editriwayatkonseling" enctype="multipart/form-data" method="POST">
                                @csrf
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$data->id}}">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{$data->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Status</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select name="status" class="form-select" aria-label="Default select example">
                                                    <option value="Konsul Diterima">Konsul Diterima</option>
                                                    <option value="Selesai">Selesai</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <div id="hide" class="input mb-3 mt-3">
                                                    <label for="judulartikel" class="form-label">Judul Artikel</label>
                                                    <input type="text" class="form-control" id="judulartikel" value="{{$data->id}}" name="id">
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="delete" enctype="multipart/form-data" method="POST">
                            @csrf
                                <div id="hide" class="input mb-3 mt-3">
                                    <label for="judulartikel" class="form-label">get id</label>
                                    <input type="text" class="form-control" id="judulartikel" value="{{$data->id}}" name="id">
                                </div>
                                <input class="btn btn-danger mt-2" name="delete" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>