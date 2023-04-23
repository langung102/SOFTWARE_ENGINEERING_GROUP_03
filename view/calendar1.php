<?php
    require_once("header.php");
?>

<div class="row g-0 page-body">
    <div class="col-3">
        <?php
            require_once("leftbar.php");
        ?>
    </div>
    <div class="d-flex flex-column mb-3 col-8 my-5 ">

        <h2 class="text-center text-primary mb-5 fw-bold"> DANH SÁCH NHÂN VIÊN </h3>

        <!-- filter -->
        <?php
            $msg = $data['msg'];
            echo "<h1>".$msg."</h1>";
            if ($msg != '') {
                echo "<h1>".$msg."</h1>";
            }
            else {
        ?> 
        
        <div class="d-flex"> 
            <div class="p-2 dropdown mb-5">
                <form method="POST" id="filterPositionform" action="/calendar/viewlistInfo">
                    <select name="filter_position" class="form-select" aria-label="Default select example" id="filter_position">
                            <option <?php 
                                if(isset($_POST['filter_position'])){
                                    if(intval($_POST['filter_position']) == 0){
                                        echo"selected=selected";
                                    }
                                } 
                        ?> value="0" >Tất cả</option>
                            <option value="1"  <?php 
                                if(isset($_POST['filter_position'])){
                                    if(intval($_POST['filter_position']) == 1){
                                        echo"selected=selected";
                                    }
                                } 
                        ?> >Collector</option>
                            <option value="2"  <?php 
                                if(isset($_POST['filter_position'])){
                                    if(intval($_POST['filter_position']) == 2){
                                        echo"selected=selected";
                                    }
                                } 
                        ?> >Janitor</option>    
                    </select>
                    <button type="submit" class="btn btn-danger" style="display:none"></button>
                </form>  
            </div>
            <div class="p-2 flex-grow-1 mb-5">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <img src="../asset/img/search.png" alt="" width="20px">
                    </button>
                </form>
            </div>
        </div>

        <table class="text-center table table-responsive table-responsive-sm">
            <thead>
                <tr class="fw-semibold text-primary fs-5">
                    <th scope="row">ID</th>
                    <th scope="row">Họ và tên</th>
                    <th scope="row">Chức vụ</th>
                    <th scope="row">Xem thông tin lịch làm việc</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach ($data['result'] as $val) {
                        $position = '';
                        if ($val['position'] === 'collector')
                            $position = 'Collector'; 
                        else 
                            $position = 'Janitor';
                        echo "<tr class='my-1'>
                        <td class='fw-bold'>".$val['id']."</td>".
                        "<td class='fw-semibold'>".$val['name']."</td>".
                        "<td class='fw-semibold fst-italic'>".$position."</td>".
                        "<td>
                            <form action='/calendar/getDetailCalendar' method='GET'>
                                <button type='submit' class='fw-semibold btn btn-primary' name = 'id' value = '".$val['id']."'>Xem chi tiết</button>
                            </form>
                        </td> 
                        </tr>";
                    }
                }
                ?>  
            </tbody>
        </table>

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
        $("#filter_position").change(function() {    
            $("#filterPositionform").submit();
        });
    });
</script>

<?php
    require_once("footer.php");
?>