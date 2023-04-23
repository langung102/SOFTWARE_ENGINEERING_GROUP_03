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
        <!-- filter -->
        <form method="POST" id="filterTask" action="/task/manage">
            <div class="d-flex">
                <div class="p-2">
                    <select class="form-select" name="state" id="state" required>
                        <option <?php if ($data['state'] == -1) echo "selected=selected"?> value="">Trạng thái</option>
                        <option <?php if ($data['state'] == 0) echo "selected=selected"?> value="0">Chưa hoàn thành</option>
                        <option <?php if ($data['state'] == 1) echo "selected=selected"?> value="1">Đang hoàn thành</option>
                        <option <?php if ($data['state'] == 2) echo "selected=selected"?> value="2">Đã hoàn thành</option>
                    </select>
                </div>           
                <div class="p-2 flex-grow-1">
                    <div class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="button">
                            <img src="../asset/img/search.png" alt="" width="20px">
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-bordered border-primary table-striped mt-3">
            <thead>
                <tr class="fw-bold">
                    <th class="text-center" scope="row" width="10%">Tuần</th>
                    <th class="text-center" scope="row" width="10%">Mã số</th>
                    <th class="text-center" scope="row" width="20%">Tên nhân viên</th>
                    <th class="text-center" scope="row" width="10%">Khu vực</th>
                    <th class="text-center" scope="row" width="10%">Troller</th>
                    <th class="text-center" scope="row" width="10%">Route</th>
                    <th class="text-center" scope="row" width="13%">Vehicle</th>
                    <th class="text-center" scope="row" width="10%">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($data['result']) && isset($data['name'])) {
                        foreach ($data['result'] as $key => $val) {
                            $x=$val['state'];
                            $work = ($x==0)?"../asset/img/delete.png":(($x==1)?"../asset/img/clock.png":"../asset/img/work-in-progress.png");
                            echo "<tr><td>".$val['week']."</td><td>".$val['id_task']."</td>".
                            "<td>".$data['name'][$key]."</td>".
                            "<td>".$val['assigned_area']."</td>".
                            "<td>".$val['assigned_troller']."</td>".
                            "<td>".$val['assigned_route']."</td>".
                            "<td>".$val['assigned_vehicle']."</td>".
                            "<td class='text-center'><img src=$work style='width:auto; height:20px;'></td>
                            </tr>"; 
                        }
                    }
                    else echo "<p class='text-center fs-6 fst-italic'>".$data['msg']."</p>";
                ?>  
            </tbody>
        </table>
        <div class="container">
            <div class="d-flex flex-row mb-3">
                <div class="p-2" style="width:50px; height:25px"> <img src= "../asset/img/delete.png" style="width:auto; height:20px;"></div>
                <div class="d-flex align-items-center p-2">Chưa hoàn thành</div>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="p-2" style="width:50px; height:25px"> <img src= "../asset/img/clock.png" style="width:auto; height:20px;"></div>
                <div class="d-flex align-items-center p-2">Đang hoàn thành</div>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="p-2" style="width:50px; height:25px"> <img src= "../asset/img/work-in-progress.png" style="width:auto; height:20px;"></div>
                <div class="d-flex align-items-center p-2">Đã hoàn thành</div>
            </div>
        </div>

        <!-- add task -->
        <div class="d-flex flex-grow-1 align-items-end justify-content-end">
            <a href="/task/assign">
                <button type="button" class="btn btn-primary rounded-circle p-3 mb-2">
                    <img src="../asset/img/add_task.png" alt="" width="50px">
                </button>
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#state").change(function() {    
            $("#filterTask").submit();
        });
    });
</script>
<?php
    require_once("footer.php");
?>