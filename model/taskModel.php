<?php
    class taskModel extends Database {
        function getAllTask() {
            $sql = "SELECT * FROM task";
            $result = $this->conn->query($sql);
            return $result;
        }

        function getTaskwithState($state) {
            $sql = "SELECT * FROM task WHERE `state` = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $state);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result;
        }
        
        function addTask($description, $id_employee, $assigned_area, $assigned_troller, $assigned_route, $assigned_vehicle, $week, $day, $time)
        {
            $stmt = $this->conn->prepare("INSERT INTO task (`description`, id_employee, assigned_area, assigned_troller, assigned_route, assigned_vehicle, `week`, `day`, `time`) VALUES (?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sissssiii", $description, $id_employee, $assigned_area, $assigned_troller, $assigned_route, $assigned_vehicle, $week, $day, $time);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->affected_rows == 1)
                return true;
            return false;
        }
    }
?>