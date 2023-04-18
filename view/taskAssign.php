<?php
    require_once("header.php");
?>

<div class="assign container-fluid rounded">
    <div class="row">
        <div class="switch6 bg-primary" style="border:1px solid #999999;">
			<label class="switch6-light" onclick="">
				<input type="checkbox">
				<span>
					<span>Collector</span>
					<span>Janitor</span>
			    	</span>
					<a class="btn btn-light"></a>
				</label>
			</div>
        </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <div class="row" style="padding-bottom: 10px;">
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tuần
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ngày
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-3">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buổi
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="./asset/img/map.png" style="width: 450px; height: 550px;"></img>
        </div>
        <div class="col-2">
            <div class="bg-primary" style="border-radius: 10px; color: white; text-align: center; padding: 2px 2px;">
                Chưa phân công
            </div>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table class="border">
                            </table>
                            </div>
                            <div class="table100-body js-pscroll">
                            <table>
                            <tbody>
                            <?php
                                for ($i = 1; $i <= 20; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">A</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-primary" style="border-radius: 10px; color: white; text-align: center; padding: 2px 2px;">
                Đã được phân công
            </div>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110" style="padding-top: 60px">
                        <div class="table100-head">
                            <table class="border">
                            <thead>
                            <tr class="row100 head bg-light">
                            <th class="cell100 column1 text-primary">Route</th>
                            <th class="cell100 column2 text-primary">Collector</th>
                            <th class="cell100 column3 text-primary">Vehicle</th>
                            </tr>
                            </thead>
                            </table>
                            </div>
                            <div class="table100-body js-pscroll" style="max-height: 440px;">
                            <table>
                            <tbody>
                            <?php
                                for ($i = 1; $i <= 20; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">A</td>
                                    <td class="cell100 column2">B</td>
                                    <td class="cell100 column3">C</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 5px">
        <div class="col-2">
            <button type="button" class="btn btn-primary">
                <img src="./asset/img/arrowbutton.png" style="width: 20%; margin-left: -5px; margin-right: 10px;"></img>    
                Trở về
            </button>
        </div>
        <div class="col-7"></div>
        <div class="col-3">
            <button type="button" class="btn btn-light border border-primary" style="margin-right: 10px;">
                Xóa tất cả
            </button>
            <button type="button" class="btn btn-primary">
                Lưu
                <img src="./asset/img/savebutton.png" style="width: 25%; margin-left: 5px; margin-bottom: 4px;"></img>    
            </button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
            crossorigin="anonymous">
</script>