<?php
class user extends Controller {
    function login () {
        $login = $this->model("userModel");
        $result_login = $login->login($_POST["username"], $_POST["password"]);
        if ($result_login) header('Location: /task/Manage');
        else $this->view("login", ["fail_login" => 1]);
    }

    function signout() {
        session_destroy();
        Header('Location: /home');
    }
}
?>