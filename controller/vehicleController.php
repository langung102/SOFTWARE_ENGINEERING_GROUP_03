<?php 
    class vehicle extends Controller{
        private $vehicle;

        public function __construct(){
            $this->vehicle = $this->model('vehicleModel');
        }
        function viewVehicle(){
            $data = $this->vehicle->Vehicle();
            // echo $data;
            $this->view("vehicle", $data=["dataVehicle"=>$data]);
        }
    }
?>