<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konseling Kuy</title>
  <link rel="stylesheet" href="/login.css">
  <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="row regis">
    <div class="col">
      <img src="../asset/image 3.png" alt="" class="img">
    </div>
    <div class="col form-box">
      <form action="{{ route('login.action') }}" class="form" method="POST">
        @csrf
        <div class="mb-3">
          <p class="h1 fw-bold mb-5 ">Login</p>
          <div class="input-group mb-4">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-at"></i></span>
            <input type="email" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"
              placeholder="Email">
          </div>
        </div>
        <div class="input-group mb-4">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
          <input type="password" class="form-control" id="exampleInputEmail1" name="sandi" aria-describedby="emailHelp"
            placeholder="Password">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Remember me
            </label>
          </div>
      <input class="btn btn-primary" type="submit" value="Login" >
        <p>Don't have an account? <a href="/">Sign Up</a></p>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>