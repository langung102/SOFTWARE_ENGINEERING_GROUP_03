<?php
class task extends Controller {
    function assign() {
        if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficier') $this->view("taskAssign");
        else $this->view("page404");
    }
    
    function manage() {
        if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficier') {
            $show = $this->model('taskModel');
            $result = $show->getAllTask();
            if ($result->num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    $data[] = $row;
                }
                $this->view("taskManage", ['result' => $data]);
            }
            else $this->view("taskManage", ['msg' => 'Chưa có task nào.']);
        }
        else $this->view("page404");    
    }
}
?>