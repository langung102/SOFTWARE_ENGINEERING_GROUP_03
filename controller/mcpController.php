<?php 

    class mcp extends Controller{
        // public $id_area= $_POST['filter_area'];

        private $model;

        public function __construct(){
            $this->model = $this->model('mcpModel');
        }
        function viewMCP(){
           
            if(isset($_POST['filter_area'])){
                $areaID = intval($_POST['filter_area']);
                if($areaID == 0){
                    $data = $this->model->MCP();
                }
                else{
                    $data = $this->model->MCP_area1($areaID);
                }    
            }
            else{
                $data = $this->model->MCP();
            }
            // echo $data;
            $this->view("mcp", $data=["datamcp"=>$data]);
        }
    }
?>