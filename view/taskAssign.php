<?php
    require_once("header.php");
?>

<div class="assign container-fluid rounded my-3">
    <div class="row">
        <div class="switch6 bg-primary" style="border:1px solid #999999;">
			<label class="switch6-light">
				<input id="change" type="checkbox">
				<span>
					<span>Collector</span>
					<span>Janitor</span>
			    </span>
					<a class="btn btn-light"></a>
				</label>
			</div>
        </div>
    <div class="row">
        <div class="col-7"></div>
        <div class="col-5">
            <div class="row" style="padding-bottom: 10px; margin-left: 40px">
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
            <!-- <img class="img-fluid" src="../asset/img/map.png" style="width: 450px; height: 550px;"></img> -->
            <div id="map"></div>
        </div>
        <div class="col-2">
            <div class="bg-primary" style="border-radius: 10px; color: white; text-align: center; padding: 4px 2px;">
                Chưa phân công
            </div>
            <div id="blank" class="container-table100" style="min-width: 270px">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table class="border">
                            </table>
                            </div>
                            <div class="table100-body js-pscroll">
                            <table id="table0">
                            <tbody id="table0body">
                            <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">

                                    </td>
                                    </tr>';
                                }
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="route" class="container-table100" style="display: none; min-width: 270px">
                <div id="subroute" class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table class="border">
                            </table>
                            </div>
                            <div class="table100-body js-pscroll">
                            <table id="table1">
                            <tbody id="table1body">
                            <?php
                                for ($i = 1; $i <= 20; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">
                                        <button type="button" class="btn btn-primary" onclick="selected1(this)">
                                        '.$data["route"]["id"].'
                                        </button>
                                    </td>
                                    </tr>';
                                }
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="collector" class="container-table100" style="display: none; min-width: 270px">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table class="border">
                            </table>
                            </div>
                            <div class="table100-body js-pscroll">
                            <table id="table2">
                            <tbody id="table2body">
                            <?php
                                for ($i = 1; $i <= 20; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">
                                        <button type="button" class="btn btn-primary" onclick="selected2(this)">
                                        collector'.$i.'
                                        </button>
                                    </td>
                                    </tr>';
                                }
                            ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="vehicle" class="container-table100" style="display: none; min-width: 270px">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110">
                        <div class="table100-head">
                            <table class="border">
                            </table>
                            </div>
                            <div class="table100-body js-pscroll">
                            <table id="table3">
                            <tbody id="table3body">
                            <?php
                                for ($i = 1; $i <= 20; $i++) {
                                    echo '
                                    <tr class="row100 body">
                                    <td class="cell100 column1">
                                        <button type="button" class="btn btn-primary" onclick="selected3(this)">
                                        vehicle'.$i.'
                                        </button>
                                    </td>
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
            <div class="bg-primary" style="border-radius: 10px; color: white; text-align: center; padding: 4px 2px; max-width: 650px;">
                Đã được phân công
            </div>
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver1 m-b-110" style="padding-top: 60px">
                        <div class="table100-head">
                            <table class="order">
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
                            <table id="tablemain">
                            <tbody id="tablemainbody">
                                <tr id="row1">
                                    <td id="cell1" class="border" onclick="selectCell1(this)" style="cursor: pointer;"><br></td>
                                    <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                                    <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                                    <td id="cell4" class="border" onclick="selectCell4(this)" style="cursor: pointer;">
                                        <img src="../asset/img/trashbin.png" onclick="deleteRow(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                                    </td>
                                </tr>
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
                <img src="../asset/img/arrowbutton.png" style="width: 20%; margin-left: -5px; margin-right: 10px;"></img>    
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
                <img src="../asset/img/savebutton.png" style="width: 25%; margin-left: 5px; margin-bottom: 4px;"></img>    
            </button>
        </div>
    </div>
</div>

<script>
    var curCell1 = "";
    var curCell2 = "";
    var curCell3 = "";
    var curRow = 0;
    var numRow = 1;
    var flagAddRow = 0;

    var map = L.map('map').setView([10.884408, 106.806318], 13);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var polygon = L.polygon([
        [[10.87169135362013, 106.77058391383869],
[10.87337715284553, 106.77106671146055],
[10.87493650864648, 106.76918916515334],
[10.87660121732765, 106.76645331196285],
[10.873566804662193, 106.76535897068666]]
    ]).addTo(map);

    var bounds = polygon.getBounds()
    map.fitBounds(bounds)
    var center = bounds.getCenter()
    map.panTo(center)


    // L.Routing.control({
    //     waypoints: [
    //         L.latLng(10.840859077354168, 106.69524804835847),
    //         L.latLng(10.80885499246943, 106.67674127040907)
    //     ],
    //     routeWhileDragging: true
    // }).addTo(map);

    function clearAllColorCell() {
        var table = document.getElementById("tablemain");
        var cells = table.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            cells[i].style.backgroundColor = "white";
        }
    }

    function selectCell1(cell) {
        var row = cell.parentNode;
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle").style.display = "none";
        curRow = row;
    }
    function selectCell2(cell) {
        var row = cell.parentNode;
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "";
        document.getElementById("vehicle").style.display = "none";
        curRow = row;
    }
    function selectCell3(cell) {
        var row = cell.parentNode;
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle").style.display = "";
        curRow = row;
    }
    function deleteRow(icon) {
        var cell = icon.parentNode;
        var row = cell.parentNode;
        var contentCount = 0;
        for (var i = 0; i < row.cells.length - 1; i++) {
        var content = row.cells[i].textContent.trim();
        if (content !== '') {
            contentCount++;
        }
        }
        if (contentCount <= 2) {
        // Row does not have three cells with content, no need to delete
        return;
        }
        row.parentNode.removeChild(row);
    }
    function selected1(button) {
        curRow.childNodes[3].setAttribute("onclick", "selectCell2(this)");
        if (curRow.childNodes[1].innerHTML != "<br>") {
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected1(this)">
            ` + curRow.childNodes[1].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");
            curRow.childNodes[1].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
            document.getElementById("table1body").innerHTML += tmp;
        } else {
            var row = button.closest("tr");
            curRow.childNodes[1].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
        }

    }
    function selected2(button) {
        curRow.childNodes[5].setAttribute("onclick", "selectCell3(this)");
        if (curRow.childNodes[3].innerHTML != "<br>") {
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected2(this)">
            ` + curRow.childNodes[3].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");
            curRow.childNodes[3].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
            document.getElementById("table2body").innerHTML += tmp;
        } else {
            var row = button.closest("tr");
            curRow.childNodes[3].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
        }
    }
    function selected3(button) {
        if (curRow.childNodes[5].innerHTML != "<br>") {
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected3(this)">
            ` + curRow.childNodes[5].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");
            curRow.childNodes[5].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
            document.getElementById("table3body").innerHTML += tmp;
        } else {
            var row = button.closest("tr");
            curRow.childNodes[5].innerHTML = button.textContent;
            row.parentNode.removeChild(row);
        }
        if (curRow.getAttribute("id") == "row" + numRow && document.getElementById("row" + numRow).childNodes[1].textContent != "" && document.getElementById("row" + numRow).childNodes[3].textContent != "" && document.getElementById("row" + numRow).childNodes[5].textContent != "") {
            numRow += 1;
            var tableBody = document.getElementById("tablemainbody");
            var newRow = document.createElement("tr");
            newRow.setAttribute("id", "row" + numRow);
            newRow.innerHTML = `
                <td id="cell1" class="border" onclick="selectCell1(this)" style="cursor: pointer;"><br></td>
                <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell4" class="border" onclick="selectCell4(this)" style="cursor: pointer;">
                    <img src="../asset/img/trashbin.png" onclick="deleteRow(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                </td>
            `;
            tableBody.appendChild(newRow);
        }
    }
</script>
