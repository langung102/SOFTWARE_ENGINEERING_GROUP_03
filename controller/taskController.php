<?php
class task extends Controller {
    function assign() {
        if (!isset($_SESSION['id'])) $this->view("page404");
        else $this->view("taskAssign");
    }
    
    function manage() {
        if (!isset($_SESSION['id'])) $this->view("page404");
        else {
            $show = $this->model('taskModel');
            $result = $show->getAllTask();
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    $data[] = $row;
                }
            }
            $this->view("taskManage", ['result' => $data]);
        }
    }
}
?>