<?php
class home extends Controller {
    function default() {
        $this->view("home");
    }
    function login() {
        $this->view("login");
    }
    function mainpage() {
        $this->view("mainpage");
    }
}
?>