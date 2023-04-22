<?php
    class routeModel extends Database {
        function getAllRoute() {
            $sql = "SELECT * FROM route";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>