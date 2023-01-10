<!doctype html>
@include('partials.navbar')
<html lang="en">
  <head>
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
                    <tr>
                      @foreach($table_konsulKonselor as $data)
                      <td scope="col">{{$data->id}}</td>
                      <td scope="col">{{$data->}}</td>
                      <td scope="col">{{$data->}}</td>
                      <td scope="col">{{$data->id}}</td>
                      <td scope="col">{{$data->id}}</td>
                      <td scope="col">{{$data->id}}</td>
                      <td scope="col">Konselor 1</td>
                      <td scope="col">2/1/2023</td>
                      <td scope="col">40000</td>
                      <td scope="col">ASDad</td>
                      <td scope="col">Menunggu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
