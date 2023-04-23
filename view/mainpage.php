<?php
    require_once("header.php");
    
?>
<div class="row g-0 page-body">
<div class="col-auto">
      <?php
        require_once("leftbar.php")
      ?>
    </div>
  <div class="row">
    <div class="col m-4" style="padding-left: 300px;">
      <h1> Bảng điều khiển </h1>
        <div class="container overflow-hidden text-center mt-5">
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">  
            <div class="col-2 p-0">
              Nhân viên
            </div>
            <div class="col-2">
            </div>
          </div>  
          <div class="row justify-content-around pb-5"style="min-width: 1000px;">
            <div class="col-2 bg-white p-3 border border-info rounded-2">
              <?php
                echo "
                <span style='float: left;'> Collectors </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["col1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["col2"] . "</span>";
              ?>
            </div>
            <div class="col-2 bg-white p-3 border border-info rounded-2">
            <?php
                echo "
                <span style='float: left;'> Janitors </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["jan1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["jan2"] . "</span>";
              ?>
            </div>
            </div>
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">
            <div class="col-2 p-0">
              Thiết bị
            </div>
            <div class="col-2">
            </div>
          </div>
          <div class="row justify-content-around pb-5">
            <div class="col-2 bg-white p-3 border border-info rounded-2">
            <?php
                echo "
                <span style='float: left;'> Vehicles </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["vehi1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["vehi2"] . "</span>";
              ?>
            </div>
            <div class="col-2 bg-white p-3 border border-info rounded-2">
            <?php
                echo "
                <span style='float: left;'> Trollers </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["troll1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["troll2"] . "</span>";
              ?>
            </div>
            </div>
          <!-------------------------------------------------------------------------------->
          <div class="row text-start justify-content-around pb-2">
            <div class="col-2 p-0">
              Vị trí
            </div>
            <div class="col-2">
            </div>
          </div>
          <div class="row justify-content-around">
            <div class="col-2 bg-white p-3 border border-info rounded-2">
            <?php
                echo "
                <span style='float: left;'> Areas </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["area1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["area2"] . "</span>";
              ?>
            </div>
            <div class="col-2 bg-white p-3 border border-info rounded-2">
            <?php
                echo "
                <span style='float: left;'> Routes </span>      
                <span style='color: blue; font-size: 20px; font-weight: bold; float: right;'>" .$data["rou1"] . "</span> 
                <span style='color: black; font-size: 20px; font-weight: bold; float: right;'> / </span>
                <span style='color: red; font-size: 20px; font-weight: bold; float: right;'>" . $data["rou2"] . "</span>";
              ?>
            </div>
          </div>
          
        </div>
    </div>
  </div>
</div>

<?php 
require_once("footer.php");
?>