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
    <div class="p-2 dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary 
                btn-lg align-items-end justify-content-end" type="button" data-bs-toggle="dropdown" 
                aria-expanded="false" style="width:150px;">
                    Khu vực 1
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Khu vực hai</a></li>
                    <li><a class="dropdown-item" href="#">Khu vực ba</a></li>
                    <li><a class="dropdown-item" href="#">Khu vực tư</a></li>
                    <li><a class="dropdown-item" href="#">Khu vực khác</a></li>
                </ul>
            </div>
    </div>
        <!-- table -->
        <table class="table table-success table-striped mt-3 fs-6">
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
<?php 
    require_once("footer.php");
?>