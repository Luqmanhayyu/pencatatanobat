<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('CSS/home.css')}}">
  <title>TAMPIL PENJUALAN</title>
  <!--SCRIPT -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- CSS-->
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      /* Add margin at the bottom of the navbar */
    }

    .navbar-brand {
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #343a40;
    }

    .navbar-nav .nav-link:hover {
      color: #007bff;
    }

    .table {
      background-color: #ffffff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

    .obat-image {
      max-width: 50px;
      max-height: 50px;
      border-radius: 50%;
    }
  </style>
</head>

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

  <div class="container mt-4 mb-4">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pembeli</th>
          <th scope="col">Gambar Obat</th>
          <th scope="col">Nama Obat</th>
          <th scope="col">Harga Obat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $dt)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$dt->nama_pembeli}}</td>
          <td><img src="{{ asset('public/image/obat.png') }}" alt="Obat Image" class="obat-image"></td>
          <td>{{$dt->nama_obat}}</td>
          <td>{{$dt->harga_obat}}</td>
          <td>
            <a href="/editTransaksi/{{$dt->id}}" class="btn btn-primary">Edit</a>
            <a href="/delete/{{$dt->id}}" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!--FOOTER -->
  <div class="footer">
    <p>&copy; @2023 APOTEKKU. All Rights Reserved.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </