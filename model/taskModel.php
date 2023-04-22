<?php
    class taskModel extends Database {
        function getAllTask() {
            $sql = "SELECT * FROM task";
            $result = $this->conn->query($sql);
            return $result;
        }
    }
?>