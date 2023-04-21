<?php 
    class vehicleModel extends Database{
        function Vehicle(){
            $sql = "SELECT * FROM vehicle";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>
