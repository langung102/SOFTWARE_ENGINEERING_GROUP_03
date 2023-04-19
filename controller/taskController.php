<?php
class task extends Controller {
    function assign() {
        $this->view("taskAssign");
    }
    
    function manage() {
        $this->view("taskManage");
    }
}
?>