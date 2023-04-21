<?php
class task extends Controller {
    function assign() {
        // $route = $this->model("route");
        // // $collector = $this->model("collector");
        // $vehicle = $this->model("vehicle");

        // $allRoute = $route->getAllRoute();
        // $allVehicle = $vehicle->Vehicle();

        // $this->view("taskAssign", ["route" => $allRoute, "vehicle" => $allVehicle,]);
        $this->view("taskAssign");
    }
    
    function manage() {
        $this->view("taskManage");
    }
}
?>