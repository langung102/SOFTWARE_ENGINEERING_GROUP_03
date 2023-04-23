<?php 
    class mcp extends Controller{
        private $model;

        public function __construct(){
            $this->model = $this->model('mcpModel');
        }
        function viewMCP(){
            $data = $this->model->MCP();
            // echo $data;
            $this->view("mcp", $data=["datamcp"=>$data]);
        }
    }
?>