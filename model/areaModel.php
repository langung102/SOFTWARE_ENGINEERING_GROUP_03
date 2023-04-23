<?php 
    class areaModel extends Database{
        function getAllArea(){
            $sql = "SELECT * FROM area";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>