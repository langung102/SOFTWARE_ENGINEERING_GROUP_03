<?php
class task extends Controller {
    function assign() {
        $route = $this->model("routeModel");
        $employee = $this->model("employeeModel");
        $vehicle = $this->model("vehicleModel");

        $allRoute = $route->getAllRoute();
        $allEmployee = $employee->getAllEmployee();
        $allVehicle = $vehicle->Vehicle();

        $this->view("taskAssign", ["route" => $allRoute, "employee" => $allEmployee, "vehicle" => $allVehicle]);
    }
    
    function manage() {
        $this->view("taskManage");
    }
}
?>