<?php 
    require_once ("header.php");
?>
    <div class="row g-0 page-body">
    <div class="col-3">
        <?php
            require_once("leftbar.php");
        ?>
    </div>
    <div class="d-flex flex-column mb-3 col-8 my-5 me-5 ">
    <div class="align-items-end justify-content-end">
    <div class="p-2">
        <form method="POST" id="filterAreaform" action="/mcp/viewMCP">
        <div class="row">
                <div class ="col-3">

                <select  name="filter_area" class="form-select" aria-label="Default select example" id="filter_area">
                        <option <?php 
                            if(isset($_POST['filter_area'])){
                                if(intval($_POST['filter_area']) == 0){
                                    echo"selected=selected";
                                }
                            } 
                    ?> value="0" >Tất cả khu vực</option>
                        <option value="1"  <?php 
                            if(isset($_POST['filter_area'])){
                                if(intval($_POST['filter_area']) == 1){
                                    echo"selected=selected";
                                }
                            } 
                    ?> >Khu vực 1</option>
                        <option value="2"  <?php 
                            if(isset($_POST['filter_area'])){
                                if(intval($_POST['filter_area']) == 2){
                                    echo"selected=selected";
                                }
                            } 
                    ?> >Khu vực 2</option>
                        <option value="3"  <?php 
                            if(isset($_POST['filter_area'])){
                                if(intval($_POST['filter_area']) == 3){
                                    echo"selected=selected";
                                }
                            } 
                    ?> >Khu vực 3</option>
                        <option value="4"  <?php 
                            if(isset($_POST['filter_area'])){
                                if(intval($_POST['filter_area']) == 4){
                                    echo"selected=selected";
                                }
                            } 
                    ?> >Khu vực 4</option>
                     
                </select>
                <button type="submit" class="btn btn-danger" style="display:none"></button>
                </div>
            </div>
        </form>
        </div>
    </div>
        <!-- table -->
        <table class="table table-success table-striped table-info mt-3 fs-6">
            <thead>
                <tr class="fw-bold">
                    <th scope="col" style="width:10%">Mã số</th>
                    <th scope="col">Sức chứa tối đa</th>
                    <th scope="col">Sức chứa hiện tại</th>
                    <th scope="col">Vị trí</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            // if(isset($_POST['filter_area'])){
            //     echo "yes";
            // }
            $result = $data["datamcp"];

            while($row = $result->FETCH_ASSOC()){
                $str="<tr >
                <td>".$row["id_mcp"]."</td>
                <td>".$row["max_capacity"]."</td>
                <td>".$row["current_capacity"]."</td>
                <td>".$row["location"]."</td>
            </tr>";
                    echo $str;
        }
        ?>
            </tbody>
    </table>
        <!-- add task -->
        <div class="d-flex flex-grow-1 align-items-end justify-content-end">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                <a class="page-link">Trước</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Tiếp theo</a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#filter_area").change(function() {    
            $("#filterAreaform").submit();
        });
    });
</script>
<?php 
    require_once("footer.php");
?>