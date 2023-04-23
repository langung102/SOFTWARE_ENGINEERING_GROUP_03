<?php 
    class mcpModel extends Database{
        function MCP(){
            $sql = "SELECT * FROM mcp";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
        function MCP_area1($id_area){
            $sql = "SELECT * FROM mcp WHERE my_area= $id_area";
            $result = $this->conn->query($sql);
            if($result && $result->num_rows > 0){
                return $result;
            }
        }
    }
?>