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

        <div class="row align-items-start">
            <div class="col">
                <h2 class="text-primary mb-5 fw-bold" style=""> THÔNG TIN NHÂN VIÊN </h2>
            </div>
            <div class="col fw-semibold text-end">
                <form action='/calendar/viewListInfo' method='GET'>
                    <button type='submit' class='btn btn-danger'>Trở về danh sách nhân viên</button>
                </form>
            </div>
        </div>

        <?php 
            $msg = $data['msg'];
            $positionn = '';
            if ($msg != 'Employee này chưa có lịch làm việc!' && $msg != '') {
                echo "<h4 class='fw-bold fst-italic text-danger'>".$msg."</h4>";
            }
            if ($msg == 'Employee này chưa có lịch làm việc!' || $msg == '') {
        ?>

        <div class="row align-items-start">

            <div class="col-4 text-center">
                <img src="../asset/img/avatar.png" class="img-fluid rounded-start " alt="..." width="60%">
                <h3 class="text-primary fw-semibold my-5">
                <?php foreach ($data['result1'] as $val) {
                    echo $val['name'];
                ?>
                </h3>
            </div>

            <div class="col-4">
                <div class="row align-items-start">
                    <div class="col-5">
                        <h5 class="text-primary fst-italic fw-semibold my-5"> ID nhân viên: </h5> 
                        <h5 class="text-primary fst-italic fw-semibold my-5"> Giới tính: </h5> 
                        <h5 class="text-primary fst-italic fw-semibold my-5"> Vị trí: </h5> 
                    </div>
                    <div class="col">
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['id'];
                            ?>
                        </h5>
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['gender'];
                            ?>
                        </h5>
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['position'];
                                $positionn = $val['position'];
                            ?>
                        </h5>
                    </div>
                </div>           
            </div>

            <div class="col-4">
                <div class="row align-items-start">
                    <div class="col-3">
                        <h5 class="text-primary fst-italic fw-semibold my-5"> Địa chỉ: </h5> 
                        <h5 class="text-primary fst-italic fw-semibold my-5"> Email: </h5> 
                        <h5 class="text-primary fst-italic fw-semibold my-5"> SĐT: </h5> 
                    </div>
                    <div class="col">
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['address'];
                            ?>
                        </h5>
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['mail'];
                            ?>
                        </h5>
                        <h5 class="fw-semibold my-5">                     
                            <?php 
                                echo $val['phone_number'];
                            }
                        }
                            ?>
                        </h5>
                    </div>
                </div>           
            </div>
        </div>
        
        <hr>

        <h2 class="text-primary my-5 fw-bold" style=""> LỊCH LÀM VIỆC </h2>

        <?php 
            if ($msg != 'Không có thông tin cá nhân của employee này!' && $msg != '') {
                echo "<h4 class='fw-bold fst-italic text-danger'>".$msg."</h4>";
            }
            if ($msg == 'Không có thông tin cá nhân của employee này!' || $msg == '') {
        ?>

        <div class="d-flex"> 
            <div class="p-2 dropdown mb-5">
                <form>
                    <select name="time" class="form-select" aria-label="Default select example" id="time">
                        <option>Ngày</option>
                        <option>Tuần</option>
                        <option>Tháng</option>    
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

        <table class="table table-responsive table-responsive-sm text-center mb-5">
            <thead>
                <tr class="fw-semibold text-primary fs-5">
                    <th scope="row">ID Task</th>
                    <th scope="row">Mô tả</th>
                    <?php 
                        if ($positionn === 'janitor') {
                            echo "<th scope='row'>Mã khu vực</th>
                            <th scope='row'>Troller</th>";
                        }
                        else if ($positionn === 'collector') {
                            echo "<th scope='row'>Mã tuyến đường</th>
                            <th scope='row'>Vehicle</th>";
                        }
                    ?> 
                    <th scope="row">Trạng thái</th>
                </tr>
            </thead>
            <tbody class="fw-semibold">
                <?php 
                    foreach ($data['result2'] as $val) {
                        echo "<tr>
                        <td>".$val['id_task']."</td>".
                        "<td>".$val['description']."</td>";
                        if ($positionn == 'janitor') {
                            echo "<td>".$val['assigned_area']."</td>
                            <td>".$val['assigned_troller']."</td>";
                        }
                        else if ($positionn === 'collector') {
                            echo "<td>".$val['assigned_route']."</td>
                            <td>".$val['assigned_vehicle']."</td>";
                        }

                        if ($val['state'] === '0') {
                            echo "<td class='text-danger'>Chưa thực hiện</td>";
                        }
                        else if ($val['state'] === '1') {
                            echo "<td>Đang tiến hành</td>";
                        }
                        else if ($val['state'] === '2') {
                            echo "<td class='text-success'>Hoàn thành</td>";
                        }
                        echo "</tr>";
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
        
        <?php 
            }
        ?>  
    </div>
</div>

<?php
    require_once("footer.php");
?>
