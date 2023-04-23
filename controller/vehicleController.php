<?php 
    class vehicle extends Controller{
        private $vehicle;

        public function __construct(){
            $this->vehicle = $this->model('vehicleModel');
        }
        function viewVehicle(){
            $data = $this->vehicle->Vehicle();
            $data2 = $this->vehicle->Vehicle();
            // echo $data;
            $this->view("vehicle", ["dataVehicle"=>$data,"dataVehicle2"=>$data2]);
        }
    }
?>