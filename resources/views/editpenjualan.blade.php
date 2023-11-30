<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('CSS/home.css')}}">
  <title>EDIT PENJUALAN</title>
  <!--SCRIPT -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- CSS-->
</head>

<style>
  body {
    background-color: #f8f9fa;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  form {
    max-width: 400px;
    margin: auto;
    margin-top: 50px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  h1 {
    text-align: center;
    color: #007bff;
  }

  label {
    color: #495057;
  }

  input.form-control {
    margin-bottom: 10px;
  }

  button.btn-primary {
    width: 100%;
  }

  .navbar {
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand {
    font-weight: bold;
  }

  .navbar-nav .nav-link {
    color: #343a40;
    padding: 1rem;
  }

  .navbar-nav .nav-link:hover {
    color: #007bff;
  }

  .btn-outline-success {
    color: #28a745;
    border-color: #28a745;
  }

  .btn-outline-success:hover {
    background-color: #28a745;
    color: #ffffff;
  }

  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #ffffff;
    padding: 10px 0;
    text-align: center;
    color: #000;
  }
</style>


<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">APOTEKKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Obat
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('catat')}}">Catat</a></li>
              <li><a class="dropdown-item" href="{{route('tampilobat')}}">Tampil Obat</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('tampilpenjualan')}}">Pembelian</a></li>
              <li><a class="dropdown-item" href="{{route('tampilpenjualan')}}">Lihat Pembelian</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <form action="/updateTransaksi/{{$data->id}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Pembeli</label>
      <input type="text" class="form-control" value="{{$data->nama_pembeli}}">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Obat</label>
      <input type="text" class="form-control" value="{{$data->nama_obat}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Harga Obat</label>
      <input type="text" class="form-control" value="{{$data->harga_obat}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--FOOTER -->
  <div class="footer">
    <p>&copy; @2023 APOTEKKU. All Rights Reserved.</p>
  </div>

</body>

</html>