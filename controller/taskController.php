<?php
class task extends Controller {
    
    private $taskAssign;
    public function __construct(){
        $this->taskAssign = $this->model('taskModel');
    }
    function assign() {
        $this->view("taskAssign");
    }
    
    function manage() {
        $data = $this->taskAssign->taskAssign();
        $this->view("taskManage", $data=["dataAssignTask"=>$data]);
    }
}
?>