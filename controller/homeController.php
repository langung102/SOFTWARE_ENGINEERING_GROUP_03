<?php
class home extends Controller {
    function default() {
        $this->view("home");
    }
    function login() {
        $this->view("login");
    }
}
?>