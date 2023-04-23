<?php
class task extends Controller {
    
    private $taskAssign;
    public function __construct(){
        $this->taskAssign = $this->model('taskModel');
    }
    function assign() {
        if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficer') {
            $route = $this->model("routeModel");
            $employee = $this->model("employeeModel");
            $vehicle = $this->model("vehicleModel");
            $area = $this->model("areaModel");
            if (isset($_POST)) {
                $add = $this->model('taskModel');
                if (isset($_POST['week'])) $week = $_POST['week'];
                if (isset($_POST['day'])) $day = $_POST['day'];
                if (isset($_POST['time'])) $time = $_POST['time'];
                if (isset($_POST['collector'])) {
                    foreach ($_POST['collector'] as $row) {
                        $description = "Task cho collector";
                        $assigned_route =  trim($row[1]," ");
                        $name =  trim($row[2]," ");
                        $id_employee = $employee->getIdEmployee($name);
                        $assigned_vehicle =  trim($row[3]," ");
                        $success = $add->addTask($description, $id_employee, "", "", $assigned_route, $assigned_vehicle, $week, $day, $time);
                        if ($success == true) {
                            $msgCollector = "Giao task thành công cho Collector !";
                            $employee->updateStateEmployee($id_employee, 1);
                            $route->updateStateRoute($assigned_route, 1);
                            $vehicle->updateStateVehicle($assigned_vehicle, 1);
                            
                        }
                        else $msgCollector =  "Giao task KHÔNG thành công cho Collector !";
                    }
                }
                if (isset($_POST['janitor'])) {
                    foreach ($_POST['janitor'] as $row) {
                        $description = "Task cho janitor";
                        $assigned_area = trim($row[1]," ");
                        $name = trim($row[2]," ");
                        $id_employee = $employee->getIdEmployee($name);
                        $assigned_troller = trim($row[3]," ");
                        $success = $add->addTask($description, $id_employee, $assigned_area, $assigned_troller, "", "", $week, $day, $time);
                        if ($success == true) {
                            $msgJanitor = "Giao task thành công cho Janitor !";
                            $employee->updateStateEmployee($id_employee, 1);
                            $vehicle->updateStateVehicle($assigned_troller, 1);
                        }
                        else $msgJanitor =  "Giao task KHÔNG thành công cho Janitor !";
                    }
                }
                // $this->view("taskAssign", ['msgCollector' => $msgCollector, 'msgJanitor' => $msgJanitor,]);
            }
            $freeRoute = $route->getFreeRoute();
            $freeEmployee = $employee->getFreeEmployee();
            $freeVehicle = $vehicle->freeVehicle();
            $freeEmployee2 = $employee->getFreeEmployee();
            $freeVehicle2 = $vehicle->freeVehicle();
            $allArea = $area->getAllArea();
            $this->view("taskAssign", ["route" => $freeRoute, "area" => $allArea, "employee" => $freeEmployee, "vehicle" => $freeVehicle, "employee2" => $freeEmployee2, "vehicle2" => $freeVehicle2]);
        }
        else $this->view("page404");
    }
    
    function manage() {
        if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficer') {
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