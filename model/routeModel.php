<?php
    class routeModel extends Database {
        function getAllRoute() {
            $sql = "SELECT * FROM route";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function getFreeRoute() {
            $sql = "SELECT * FROM `route` WHERE state = 0";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }

        function updateStateRoute($id_route, $state) {
            $sql = "UPDATE `route` SET state = ? WHERE id_route = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("is",  $state, $id_route);
            $status = $stmt->execute();
            if ($status == true) {
                return true;
            }
            return false;
        }
    }
?>