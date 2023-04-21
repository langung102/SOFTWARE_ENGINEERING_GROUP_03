<!DOCTYPE html>
  <html lang="en">
    <!-- ---------------------------------Header --------------------------------- -->
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
      <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
      <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
      <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
      <link rel="stylesheet" href="../asset/style.css">
      <link rel="stylesheet" href="../asset/switch.css">
      <link rel="stylesheet" href="../asset/assign.css">
      <title>UWC 2.0</title>
    </head>

    <!-- --------------------------------- Body ---------------------------------- -->
    <body>
      <!-- Framework -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>
      <script> AOS.init(); </script>

      <!-- Start Navbar -->
      <nav class="navbar navbar-expand-md bg-white navbar-white">
        <div class="container-fluid mx-5">
          <!-- Logo -->
          <a href="#" class="navbar-brand fs-2 fw-semibold text-primary"> 
            <img src="../asset/img/logo_uwc.png" alt="" height="50px" width="50px">
            UWC 2.0 
          </a>
          
          <!-- Links -->
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item mx-2">
                <a href="/home" class="nav-link active fs-5" >Trang chủ</a>
              </li>
              <li class="nav-item mx-2">
                <a href="https://www.frontiersin.org/articles/10.3389/frsc.2020.00008/full" class="nav-link fs-5">Tin tức</a>
              </li>
            </ul>
          </div>
          <!-- Buttons -->
          <?php
            if (isset($_SESSION['user_name'])) {
              $name = $_SESSION['name'];
              $img = "";
              echo <<< _END
              <span class="d-grid gap-2 col-6 d-md-flex justify-content-md-end me-3">
                <button type="button" class="btn bg-light rounded-circle"><img src="../asset/img/notification.png" alt="" width="30px"></button>
                <div class="dropdown">
                  <a class="dropdown-toggle text-decoration-none" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-circle mx-2" width="50px" src="../asset/img/user.png">
                    <span class="fs-5 fw-bold"> Back Officer </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item fs-5" href="/task/manage">Quản lí</a></li>
                    <li><a class="dropdown-item fs-5" href="/task/assign">Phân công công việc</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item fs-5" href="/user/signout">Đăng xuất</a></li>
                  </ul>
                </div>
              </span>   
              _END;
            }
            else {
              echo <<< _END
                <!-- Login/Signup Modal -->
                <span class="d-grid gap-2 col-6 d-md-flex justify-content-md-end">
                  <a href="/home/login" class= "btn btn-outline-primary btn-lg col-3"> Đăng nhập </a>
                  <button type="button" class="btn btn-primary btn-lg col-3"> Đăng kí </button>
                </span>   
              _END;
            }
          ?>
        </div>
      </nav>

    
