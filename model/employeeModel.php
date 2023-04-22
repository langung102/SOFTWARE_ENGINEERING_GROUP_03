<?php
    class employeeModel extends Database {
        function getAllEmployee() {
            $sql = "SELECT * FROM employee";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>