<?php 
    class Calendar extends Controller {
        private $calendar;

        function viewlistInfo(){
            if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficer') {
                $listInfo = $this->model('calendarModel');
                
                if(isset($_POST['filter_position'])){
                    $pos = intval($_POST['filter_position']);
                    if ($pos == 0){
                        $result = $listInfo->getlist();
                    }
                    else if ($pos == 1){
                        $result = $listInfo->getlistcollector();
                    }
                    else if ($pos == 2){
                        $result = $listInfo->getlistjanitor();
                    }    
                }
                else {
                    $result = $listInfo->getlist();
                }

                if ($result->num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                        $data[] = $row;
                    }
                    $this->view("calendar1", ['result' => $data, 'msg' => '']);
                }
                else $this->view("calendar1", ['msg' => 'Hiện không có danh sách.']);
            }
            else $this->view("page404"); 
        }

        function getDetailCalendar(){
            if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficer') {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $employee = $this->model('calendarModel');
                    $personal = $employee->getInfo($id);
                    $calendar = $employee->getCalendar($id);
                    if ($personal === NULL && $calendar === NULL) 
                        $this->view("calendar2", ['msg' => 'Không có thông tin về employee này!']);
                    else if ($calendar === NULL) {
                        while ($row = $personal -> fetch_assoc()) {
                            $data[] = $row;
                        }                       
                        $this->view("calendar2", ['result1' => $data, 'msg' => 'Employee này chưa có lịch làm việc!']);                        
                    }
                    else if ($personal === NULL) {
                        while ($row = $calendar -> fetch_assoc()) {
                            $data2[] = $row;
                        }
                        $this->view("calendar2", ['result2' => $data2, 'msg' => 'Không có thông tin cá nhân của employee này!']);
                    }
                    else {
                        while ($row = $personal -> fetch_assoc()) {
                            $data[] = $row;
                        }
                        while ($row = $calendar -> fetch_assoc()) {
                            $data2[] = $row;
                        }
                        $this->view("calendar2", ['result1' => $data, 'result2' => $data2, 'msg' => '']);
                    }
                }
                else $this->view("page404");
            }
            else $this->view("page404"); 
        }
    }
?>