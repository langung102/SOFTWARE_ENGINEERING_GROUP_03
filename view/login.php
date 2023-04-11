<?php
    require_once("header.php");
?>
<div class="container mt-sm-4" >
    <div class="row d-flex justify-content-center align-items-center g-0 " id="login-page">
        <div class="col-md-6">
            <img src="../asset/img/login.png" class="img-fluid rounded-start ms-5" alt="..." width="60%">
        </div>
        <div class="col-md-6 login-box">
            <form action="/user/login" method="POST" class="container py-5 login-form">
                <h2 class="mt-4 text-center">ĐĂNG NHẬP</h2>
                <div class="my-4">
                    <label for="AccountInput" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="AccountInput" name="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="InputPassword1" required>
                </div>
                <div class="row mt-4">
                    <div class="col my-3 pe-5 form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Tự động đăng nhập</label>
                    </div>
                    <button type="submit" class=" col btn btn-primary ms-5">Đăng nhập</button>
                </div>
                <div class="mt-4 text-danger">
                    <?php
                        if (isset($data["fail_login_msg"])) echo $data["fail_login_msg"];
                        else echo "";
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    require_once("footer.php");
?>