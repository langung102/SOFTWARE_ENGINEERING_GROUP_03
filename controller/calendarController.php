<?php
class calendar extends Controller {
    function default() {
        $this->view("calendar");
    }
    function login() {
        $this->view("login");
    }
}
?>