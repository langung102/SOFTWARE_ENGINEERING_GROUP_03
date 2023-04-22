<?php
    // echo $data["dataAssignTask"];
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
                <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;">
                    Tuần 
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="p-2 dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary btn-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;">
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
                        <img src="../asset/img/search.png" alt="" width="30px">
                    </button>
                </form>
            </div>
        </div>
        <!-- table -->
        <table class="table table-striped mt-3 fs-5">
            <thead>
                <tr class="fw-bold">
                    <th scope="col">Tuần</th>
                    <th scope="col">Mã số</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Khu vực</th>
                    <th scope="col">Troller</th>
                    <th scope="col">Route</th>
                    <th scope="col">Vehicle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>3</th>
                    <th>Contact</th>
                    <th>Nguyen Phuc Khang</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
            </tbody>
        </table>
        <!-- add task -->
        <div class="d-flex flex-grow-1 align-items-end justify-content-end">
            <a href="/task/assign">
                <button type="button" class="btn btn-primary rounded-circle p-3 mb-2">
                    <img src="../asset/img/add_task.png" alt="" width="70px">
                </button>
            </a>
        </div>
    </div>
</div>

<?php
    require_once("footer.php");
?>