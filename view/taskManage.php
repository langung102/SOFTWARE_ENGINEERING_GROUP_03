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
        <div class="d-flex">
            <div class="p-2 dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;">
                    Tuần 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="p-2 dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;">
                    Mã số 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>            
            <div class="p-2 flex-grow-1">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <img src="../asset/img/search.png" alt="" width="20px">
                    </button>
                </form>
            </div>
        </div>
        <table class="table table-responsive table-responsive-sm">
            <thead>
                <tr class="fw-bold">
                    <th scope="row">Tuần</th>
                    <th scope="row">Mã số</th>
                    <th scope="row">Tên</th>
                    <th scope="row">Khu vực</th>
                    <th scope="row">Troller</th>
                    <th scope="row">Route</th>
                    <th scope="row">Vehicle</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    foreach ($data['result'] as $val) {
                        echo "<tr><td></td><td>".$val['id_task']."</td>".
                        "<td>".$val['id_employee']."</td>".
                        "<td>".$val['assigned_area']."</td>".
                        "<td>".$val['assigned_troller']."</td>".
                        "<td>".$val['assigned_route']."</td>".
                        "<td>".$val['assigned_vehicle']."</td></tr>"; 
                    }
                ?>  
            </tbody>
        </table>

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

<?php
    require_once("footer.php");
?>