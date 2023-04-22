<?php 
    class taskModel extends Database{
        function taskAssign(){
            $sql = "SELECT * FROM task";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>