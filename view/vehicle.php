<?php 
    require_once("header.php");
?>

<div class="row g-0 page-body">
    <div class="col-3">
        <?php
            require_once("leftbar.php");
        ?>
    </div>
    <div class="d-flex flex-column mb-3 col-8 my-5 me-5 ">
        <div class="switch6 bg-primary" style="border:1px solid #999999;">
			<label class="switch6-light" onclick="">
				<input type="checkbox" onclick="update(this)">
				<span>
					<span>Collector</span>
					<span>Janitor</span>
			    </span>
					<a class="btn btn-light"></a>
				</label>
			</div>
        <!-- table -->
        <table id="collector" class="table table-success table-striped table-info mt-3 fs-6">
            <thead>
                <tr class="fw-bold">
                    <th scope="col" style="width:10%">Mã số</th>
                    <th scope="col">Biển số xe</th>
                    <th scope="col">Sức chứa</th>
                    <th scope="col">Tài xế</th>
                    <th scope="col">Loại xe</th>
                    <th scope="col">Trọng lượng</th>
                    <th scope="col">Mức tiêu thụ nhiên liệu</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $result = $data["dataVehicle"];
            while($row = $result->FETCH_ASSOC()){
                if ($row["type"] == "Vehicle_Collector") {
                    $str="<tr >
                    <td>".$row["id_vehicle"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["capacity"]."</td>
                    <td>".$row["driver"]."</td>
                    <td>".$row["type"]."</td>
                    <td>".$row["weight"]."</td>
                    <td>".$row["fuel_consumption"]."</td>
                </tr>";
                        echo $str;
                }
        }
        ?>
            </tbody>
        </table>

        <table id="jantior" class="table table-success table-striped table-info mt-3 fs-6" style="display: none;">
            <thead>
                <tr class="fw-bold">
                    <th scope="col" style="width:10%">Mã số</th>
                    <th scope="col">Biển số xe</th>
                    <th scope="col">Sức chứa</th>
                    <th scope="col">Tài xế</th>
                    <th scope="col">Loại xe</th>
                    <th scope="col">Trọng lượng</th>
                    <th scope="col">Mức tiêu thụ nhiên liệu</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $result = $data["dataVehicle2"];
            while($row = $result->FETCH_ASSOC()){
                if ($row["type"] == "Troller") {
                    $str="<tr >
                    <td>".$row["id_vehicle"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["capacity"]."</td>
                    <td>".$row["driver"]."</td>
                    <td>".$row["type"]."</td>
                    <td>".$row["weight"]."</td>
                    <td>".$row["fuel_consumption"]."</td>
                </tr>";
                        echo $str;
                }
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

<script>
    function update(checkbox) {
        if (checkbox.checked) {
            document.getElementById("collector").style.display = "none";
            document.getElementById("jantior").style.display = "";
        } else {
            document.getElementById("collector").style.display = "";
            document.getElementById("jantior").style.display = "none";
        }
    }
</script>

<?php 
    require_once("footer.php");
?>