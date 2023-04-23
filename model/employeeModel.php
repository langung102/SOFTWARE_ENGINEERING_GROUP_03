<?php
    class employeeModel extends Database {
        function getAllEmployee() {
            $sql = "SELECT * FROM employee";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function getFreeEmployee() {
            $sql = "SELECT * FROM employee WHERE state = 0";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function updateStateEmployee($id, $state) {
            $sql = "UPDATE employee SET state = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("is",  $state, $id);
            $status = $stmt->execute();
            if ($status == true) {
                return true;
            }
            return false;
        }
        function getIdEmployee($name) {
            $sql = "SELECT * FROM employee WHERE name = ? LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                return $row['id'];
            } else {
                "";
            }
        }
    }
?>