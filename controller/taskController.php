<?php
class task extends Controller {
    function assign() {
        if (isset($_SESSION['position']) && $_SESSION['position'] == 'backofficer') {
            $route = $this->model("routeModel");
            $employee = $this->model("employeeModel");
            $vehicle = $this->model("vehicleModel");
            $allRoute = $route->getAllRoute();
            $allEmployee = $employee->getAllEmployee();
            $allVehicle = $vehicle->Vehicle();
            $this->view("taskAssign", ["route" => $allRoute, "employee" => $allEmployee, "vehicle" => $allVehicle]);
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