<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
<div class="row">
  <div class="col-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 230px; height:100vh;">
      <a href="{{route('dashboard')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="/logo.png" alt="" width="55" height="30">
        <span class="fs-4">&nbsp;&nbsp;Dashboard Page</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="{{route('datapegawai')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Tambah Data
          </a>
        </li>
        <li>
          <a href="{{route('signout')}}" class="nav-link text-danger">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Logout
          </a>
        </li>
      </ul>
      <hr>
    </div>
  </div>
  <div class="col-9">

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <strong>Dashboard</strong>
            <strong>{{Auth::user()->name}}</strong>
          </div>
            <div class="card-body">
              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  {{ $message }}
              </div>
              @else
              <div class="alert alert-success">
                  Berhasil Masuk !
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container px-5">
        <h3>Data Pegawai</h3>
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tanggal Lahir</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $dt)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$dt->nama}}</td>
              <td>{{$dt->alamat}}</td>
              <td>{{$dt->tanggal_lahir}}</td>
            </tr> 
            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>