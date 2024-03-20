<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row">
        <div class="col-3">
          <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 230px; height:100vh;">
            <a href="{{route('dashboard')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <img src="/logo.png" alt="" width="55" height="30">
              <span class="fs-4">&nbsp;&nbsp;Dashboard Page</span>
            </a>
            <br>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link text-white" aria-current="page">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="{{route('datapegawai')}}" class="nav-link active text-white">
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
          </div>
        </div>
        <div class="col-9">
            <div class="container"><br>
                <div class="col-md-6 col-md-offset-3 mx-auto">
                    <h2 class="text-center">Form Tambah Data Pegawai</h2>
                    <hr>
                    <form action="{{route('actiondatapegawai')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label><i class="fa fa-user"></i> Nama Pegawai </label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai" required="">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-address-book"></i> Alamat </label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-calendar"></i> Tanggal Lahir </label>
                            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal Lahir" required="">
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
      
        </div>
      </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>