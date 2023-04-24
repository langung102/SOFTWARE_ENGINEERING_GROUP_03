<?php
    require_once("header.php");
?>
<div class="container mt-sm-4 page-body" >
    <div class="row d-flex justify-content-center align-items-center g-0 page-body" style="top: -90px">
        <div class="col-md-6">
            <img src="../asset/img/login.png" class="img-fluid rounded-start ms-5" alt="..." width="60%">
        </div>
        <div class="col-md-6 login-box">
            <?php
                if (isset($data["fail_login"]) && $data["fail_login"] == 1) 
                    echo <<< _END
                        <div class="login-fail d-flex mx-5 mt-4 py-2 px-2">
                            <img class="px-3" src="../asset/img/alarm.png" alt="alarm" style="width:80px;"> 
                            <h6 class="mt-3"style="color:red;">Tên đăng nhập hoặc mật khẩu chưa chính xác !</h6>
                        </div>
                    _END;
            ?>
            <form action="/user/login" method="POST" class="container py-5 login-form">
                <h2 class="mt-3 text-center">ĐĂNG NHẬP</h2>
                <div class="my-4">
                    <label for="AccountInput" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="AccountInput" name="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="InputPassword1" required>
                </div>
                <div class="row mt-4">
                    <div class="col my-3 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Tự động đăng nhập</label>
                    </div>
                    <button type="submit" class=" col btn btn-primary ms-5">Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    require_once("footer.php");
?>