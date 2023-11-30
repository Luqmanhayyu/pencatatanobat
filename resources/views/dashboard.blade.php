<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('CSS/home.css')}}">
  <title>DASHBOARD</title>

  <!--SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--CSS -->
  <style>
    body {
      background-color: #f8f9fa;
      margin-bottom: 60px;
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

    .container-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      overflow: auto;
    }

    .image-container {
      width: 48%;
      margin-right: 2%;
    }

    .dashboard-image {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .info-container {
      width: 48%;
      padding: 20px;
      margin-top: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .info-container h2,
    .info-container p {
      text-align: left;
    }

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #ffffff;
      padding: 10px 0;
      text-align: center;
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
            <a class="nav-link dropdown-toggle" href="#" id="transaksiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="transaksiDropdown">
              <li><a class="dropdown-item" href="{{route('tampilpenjualan')}}">Pembelian</a></li>
              <li><a class="dropdown-item" href="{{route('tampilpenjualan')}}">Lihat Pembelian</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4 container-content">
    <div class="image-container">
      <img src="{{ asset('image/logogambar.jpg') }}" alt="Dashboard Image" class="dashboard-image">
    </div>
    <div class="info-container">
      <h2>Welcome to the Dashboard</h2>
      <p>welcome to dashhboard pencatatan penjualan dan obat APOTEKKU</p>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>&copy; @2023 APOTEKKU. All Rights Reserved.</p>
  </div>

</body>
<!--FOOTER -->
<div class="footer">
  <p>&copy; 2023 APOTEKKU. All Rights Reserved.</p>
</div>

</html>