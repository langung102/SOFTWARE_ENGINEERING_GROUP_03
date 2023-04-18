<!DOCTYPE html>
  <html lang="en">
    <!-- ---------------------------------Header --------------------------------- -->
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="../asset/style.css">
      <title>UWC 2.0</title>
    </head>

    <!-- --------------------------------- Body ---------------------------------- -->
    <body>
      <!-- Framework -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> </script>
      <script> AOS.init(); </script>

      <!-- Start Navbar -->
      <nav class="navbar navbar-expand-md bg-white navbar-white">
        <div class="container-fluid">
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
              <span class="d-grid gap-2 col-6 d-md-flex justify-content-md-end">
                <span class="navbar-text mx-3 fs-5"><a href="/user/profile" style="text-decoration:none;"><em>$name</em></a></span>
                <!-- Signout -->
                <form action="/user/signout" method="POST">
                  <button type="submit" class="btn btn-outline-danger btn-lg">Đăng xuất</button>
                </form>
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

    
