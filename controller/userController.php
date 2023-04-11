<?php
class user extends Controller {
    function login () {
        $login = $this->model("userModel");
        $result_login = $login->login($_POST["username"], $_POST["password"]);
        if ($result_login) header('Location: /home');
        else $this->view("login", ["fail_login_msg" => "Tên đăng nhập hoặc mật khẩu không đúng !"]);
    }

    function signout() {
        session_destroy();
        Header('Location: /home');
    }
}
?>