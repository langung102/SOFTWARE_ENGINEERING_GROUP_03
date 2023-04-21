<?php
    require_once("header.php");
    
?>
<div class="container-fluid px-0">
  <div class="row">
    <div class="col-auto">
      <?php
        require_once("leftbar.php")
      ?>
    </div>
    <div class="col m-4">
      <h1> Bảng điều khiển </h1>
        <div class="container overflow-hidden text-center mt-5">
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">  
            <div class="col-4 p-0">
              Nhân viên
            </div>
            <div class="col-4">
            </div>
          </div>  
          <div class="row justify-content-around pb-5">
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              Collector
            </div>
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              Janitor
            </div>
            </div>
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">
            <div class="col-4 p-0">
              Thiết bị
            </div>
            <div class="col-4">
            </div>
          </div>
          <div class="row justify-content-around pb-5">
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              Vehicles
            </div>
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              Trollers
            </div>
            </div>
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">
            <div class="col-4 p-0">
              Vị trí
            </div>
            <div class="col-4">
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              MCP
            </div>
            <div class="col-4 bg-white p-3 border border-info rounded-2">
              Routes
            </div>
          </div>
          
        </div>
    </div>
  </div>
</div>

<?php 
require_once("footer.php");
?>