<?php
    class calendarModel extends Database {
        function getlist() {
            $sql = "SELECT * FROM employee WHERE position = 'collector' OR position = 'janitor'";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0) {
                return $result;
            }
        }

        function getlistcollector() {
            $sql = "SELECT * FROM employee WHERE position = 'collector'";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0) {
                return $result;
            }
        }

        function getlistjanitor() {
            $sql = "SELECT * FROM employee WHERE position = 'janitor'";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0) {
                return $result;
            }
        }

        function getInfo($id) {
            $sql = "SELECT * FROM employee WHERE id = $id";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }

        function getCalendar($id) {
            $sql = "SELECT * FROM task WHERE id_employee = $id";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>