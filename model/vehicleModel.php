<?php 
    class vehicleModel extends Database{
        function Vehicle(){
            $sql = "SELECT * FROM vehicle";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function freeVehicle(){
            $sql = "SELECT * FROM vehicle WHERE state = 0";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function updateStateVehicle($name, $state) {
            $sql = "UPDATE vehicle SET state = ? WHERE `name` = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("is",  $state, $name);
            $status = $stmt->execute();
            if ($status == true) {
                return true;
            }
            return false;
        }
    }
?>