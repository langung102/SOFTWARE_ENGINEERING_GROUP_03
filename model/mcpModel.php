<?php 
    class mcpModel extends Database{
        function MCP(){
            $sql = "SELECT * FROM mcp";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>