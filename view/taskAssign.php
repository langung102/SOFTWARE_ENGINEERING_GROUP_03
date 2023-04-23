<?php
    require_once("header.php");
?>

<div class="assign container-fluid rounded my-3">
    <div class="row">
        <div class="switch6 bg-primary" style="border:1px solid #999999;">
			<label class="switch6-light">
				<input id="state" type="checkbox" onclick="updateState(this)">
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
                <div class="dropdown1">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tuần
                    </button>
                    <ul class="dropdown-menu">
                    <?php
                        for ($i = 1; $i <= 20; $i++) {
                            echo '<li><a href="#">Week ' . $i . '</a></li>';
                        }
                    ?>
                    </ul>
                </div>
            </div>

            <div class="col-3">
                <div class="dropdown2">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ngày
                    </button>
                    <ul class="dropdown-menu">
                    </ul>
                </div>
            </div>

            <div class="col-3">
                <div class="dropdown3">
                    <button class="btn btn-secondary dropdown-toggle bg-light text-black border-primary" style="min-width: 100px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Buổi
                    </button>
                    <ul class="dropdown-menu">
                    </ul>
                </div>
            </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="mymap col-4">
                <!-- <img class="img-fluid" src="../asset/img/map.png" style="width: 450px; height: 550px;"></img> -->
                <div id="map"></div>
        </div>
            <div class="collectortable col-2">
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
                                    while ($result = $data["route"]->fetch_assoc()) {
                                        echo '
                                        <tr class="row100 body">
                                        <td class="cell100 column1">
                                            <button idroute="'.$result["id_route"].'" waypoint="'.$result["waypoint"].'" title="'.$result["way"].'" type="button" class="btn btn-primary" onclick="selected1(this)">
                                            '.$result["id_route"].'
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
                                    while ($result = $data["employee"]->fetch_assoc()) {
                                        if ($result["position"] == "collector")
                                            echo '
                                            <tr class="row100 body">
                                            <td class="cell100 column1">
                                                <button type="button" class="btn btn-primary" onclick="selected2(this)">
                                                '.$result["name"].'
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

                <div id="vehicle_collector" class="container-table100" style="display: none; min-width: 270px">
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
                                    while ($result = $data["vehicle"]->fetch_assoc()) {
                                        if ($result["type"] == "Vehicle_Collector")
                                            echo '
                                            <tr class="row100 body">
                                            <td class="cell100 column1">
                                                <button type="button" class="btn btn-primary" onclick="selected3(this)">
                                                '.$result["name"].'
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
            <div class="collectortable col-6">
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
                                <th class="cell100 column1 text-primary">Tuyến đường</th>
                                <th class="cell100 column2 text-primary">Collector</th>
                                <th class="cell100 column3 text-primary">Phương tiện</th>
                                </tr>
                                </thead>
                                </table>
                                </div>
                                <div class="table100-body js-pscroll" style="max-height: 440px;">
                                <table id="tablemain">
                                <tbody id="tablemainbody">
                                    <tr id="row1">
                                        <td id="cell1" class="border" onclick="selectCell1(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell2" class="border" onclick ="setRouteColor(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell3" class="border" onclick ="setRouteColor(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell4" class="border" onclick="" style="cursor: pointer;">
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

            <div class="janitortable col-2" style="display: none;">
                <div class="bg-primary" style="border-radius: 10px; color: white; text-align: center; padding: 4px 2px;">
                    Chưa phân công
                </div>
                <div id="blank2" class="container-table100" style="min-width: 270px">
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

                <div id="area" class="container-table100" style="display: none; min-width: 270px">
                    <div id="subarea" class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table class="border">
                                </table>
                                </div>
                                <div class="table100-body js-pscroll">
                                <table id="table4">
                                <tbody id="table4body">
                                <?php
                                    while ($result2 = $data["area"]->fetch_assoc()) {
                                        echo '
                                        <tr class="row100 body">
                                        <td class="cell100 column1">
                                            <button idarea="'.$result2["id_area"].'" polygon="'.$result2["polygon"].'" title="'.$result2["location"].'=>'.$result2["list_MCP"].'" type="button" class="btn btn-primary" onclick="selected4(this)">
                                            '.$result2["id_area"].'
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

                <div id="janitor" class="container-table100" style="display: none; min-width: 270px">
                    <div class="wrap-table100">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-head">
                                <table class="border">
                                </table>
                                </div>
                                <div class="table100-body js-pscroll">
                                <table id="table5">
                                <tbody id="table5body">
                                <?php
                                    while ($result2 = $data["employee2"]->fetch_assoc()) {
                                        if ($result2["position"] == "janitor")
                                            echo '
                                            <tr class="row100 body">
                                            <td class="cell100 column1">
                                                <button type="button" class="btn btn-primary" onclick="selected5(this)">
                                                '.$result2["name"].'
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
                                <table id="table6">
                                <tbody id="table6body">
                                <?php
                                    while ($result2 = $data["vehicle2"]->fetch_assoc()) {
                                        if ($result2["type"] == "Troller")
                                            echo '
                                            <tr class="row100 body">
                                            <td class="cell100 column1">
                                                <button type="button" class="btn btn-primary" onclick="selected6(this)">
                                                '.$result2["name"].'
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
            <div class="janitortable col-6" style="display: none;">
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
                                <th class="cell100 column1 text-primary">Khu vực</th>
                                <th class="cell100 column2 text-primary">Janitor</th>
                                <th class="cell100 column3 text-primary">Phương tiện</th>
                                </tr>
                                </thead>
                                </table>
                                </div>
                                <div class="table100-body js-pscroll" style="max-height: 440px;">
                                <table id="tablemain2">
                                <tbody id="tablemainbody2">
                                    <tr id="row1">
                                        <td id="cell1" class="border" onclick="selectCell4(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell2" class="border" onclick ="setAreaColor(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell3" class="border" onclick ="setAreaColor(this)" style="cursor: pointer;"><br></td>
                                        <td id="cell4" class="border" onclick="" style="cursor: pointer;">
                                            <img src="../asset/img/trashbin.png" onclick="deleteRow2(this)" style="margin-left: 16px;  max-width: 40%;"></img>
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
    var curRow = null;
    var curRoute;
    var numRow = 1;
    var flagAddRow = 0;
    var lastButton;
    var flagDelete = 0;
    var lastRow = null;
    var curState = 0;
    const lastRoute = new Array(100).fill(null);

    var curRow2 = null;
    var curArea2;
    var numRow2 = 1;
    var flagAddRow2 = 0;
    var lastButton2;
    var flagDelete2 = 0;
    var lastRow2 = null;
    const lastArea = new Array(100).fill(null);

    var map = L.map('map').setView([10.884408, 106.806318], 13);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

//     var polygon = L.polygon([
//         [[10.87169135362013, 106.77058391383869],
// [10.87337715284553, 106.77106671146055],
// [10.87493650864648, 106.76918916515334],
// [10.87660121732765, 106.76645331196285],
// [10.873566804662193, 106.76535897068666]]
//     ]).addTo(map);

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

    function updateState(checkbox) {
        curState = checkbox.checked;

        if (curState == false) {
            var table1 = document.querySelectorAll(".collectortable");
            table1.forEach(function(table) {
                table.style.display = "";
            });
            var table2 = document.querySelectorAll(".janitortable");
            table2.forEach(function(table) {
                table.style.display = "none";
            });
            setAreaColor(curRow2, "red");
            if (curRow != null) {
                setRouteColor(curRow, "green");
                var latLngString = curRow.childNodes[1].getAttribute("waypoint");
                var latLngArray = eval(latLngString);
                var firstLat = parseFloat(latLngArray[0].lat.toFixed(6));
                var firstLng = parseFloat(latLngArray[0].lng.toFixed(6));
                var secondLat = parseFloat(latLngArray[1].lat.toFixed(6));
                var secondLng = parseFloat(latLngArray[1].lng.toFixed(6));

                var southWest = L.latLng(firstLat, firstLng);
                northEast = L.latLng(secondLat, secondLng);
                var bounds = L.latLngBounds(southWest, northEast);
                map.fitBounds(bounds);
            }
        } else {
            var table1 = document.querySelectorAll(".collectortable");
            table1.forEach(function(table) {
                table.style.display = "none";
            });
            var table2 = document.querySelectorAll(".janitortable");
            table2.forEach(function(table) {
                table.style.display = "";
            });
            setRouteColor(curRow, "red");
            if (curRow2 != null) {
                setAreaColor(curRow2, "green");
                var bounds = lastArea[curRow2.childNodes[1].getAttribute("idarea")].getBounds();
                map.fitBounds(bounds);
            }
        }
    }

    function updateIdAllRow() {
        var table = document.getElementById("tablemain");
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i <= rows.length-1; i++) {
            var cells = rows[i-1].getElementsByTagName("td");
            for (var j = 1; j <= 3; j++) {
                cells[j-1].querySelector("input").setAttribute("name", "collector[" + i + "][" + j + "]");
            }
        }
    }

    function updateIdAllRow2() {
        var table = document.getElementById("tablemain2");
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i <= rows.length-1; i++) {
            var cells = rows[i-1].getElementsByTagName("td");
            for (var j = 1; j <= 3; j++) {
                cells[j-1].querySelector("input").setAttribute("name", "janitor[" + i + "][" + j + "]");
            }
        }
    }

    function clearAllColorCell() {
        var table = document.getElementById("tablemain");
        var cells = table.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            cells[i].style.backgroundColor = "white";
        }
    }

    function clearAllColorCell2() {
        var table = document.getElementById("tablemain2");
        var cells = table.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            cells[i].style.backgroundColor = "white";
        }
    }

////////////////////////////////////////////
////////////////COLECTOR_SECTION////////////////////
////////////////////////////////////////////

    function zoomRoute(row) {
        var cell = row.childNodes[1];
        if (cell.innerHTML != "<br>") {
            map.removeControl(lastRoute[cell.getAttribute("idroute")]);
                lastRoute[cell.getAttribute("idroute")] = L.Routing.control({
                        waypoints: lastRoute[cell.getAttribute("idroute")].getWaypoints(),
                        routeWhileDragging: true,
                        lineOptions: {
                            styles: [{color: 'green'}]
                        }
            }).addTo(map);
            var latLngString = cell.getAttribute("waypoint");
            var latLngArray = eval(latLngString);
            var firstLat = parseFloat(latLngArray[0].lat.toFixed(6));
            var firstLng = parseFloat(latLngArray[0].lng.toFixed(6));
            var secondLat = parseFloat(latLngArray[1].lat.toFixed(6));
            var secondLng = parseFloat(latLngArray[1].lng.toFixed(6));

            var southWest = L.latLng(firstLat, firstLng);
            northEast = L.latLng(secondLat, secondLng);
            bounds = L.latLngBounds(southWest, northEast);
            map.fitBounds(bounds);
        }
    }

    function setRouteColorRed(row) {
        if (row.childNodes[1].innerHTML != "<br>") {
            if (curRow != row && curRow != null) {
                map.removeControl(lastRoute[curRow.childNodes[1].getAttribute("idroute")]);
                lastRoute[curRow.childNodes[1].getAttribute("idroute")] = L.Routing.control({
                        waypoints: lastRoute[curRow.childNodes[1].getAttribute("idroute")].getWaypoints(),
                        routeWhileDragging: true,
                        lineOptions: {
                            styles: [{color: 'red'}]
                        },
                        fitSelectedRoutes: false
                }).addTo(map);
            }
        }
        zoomRoute(row);
    }
    function setRouteColor(row, color) {
            if (row != null) {
                map.removeControl(lastRoute[row.childNodes[1].getAttribute("idroute")]);
                lastRoute[row.childNodes[1].getAttribute("idroute")] = L.Routing.control({
                        waypoints: lastRoute[row.childNodes[1].getAttribute("idroute")].getWaypoints(),
                        routeWhileDragging: true,
                        lineOptions: {
                            styles: [{color: color}]
                        },
                        fitSelectedRoutes: false
                }).addTo(map);
            }
    }
    function selectCell1(cell) {
        if (cell.innerHTML == "<br>") {
            lastRow = curRow;
        }
        var row = cell.parentNode;
        setRouteColorRed(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle_collector").style.display = "none";
        curRow = row;
        curRoute = cell.getAttribute("idroute");
    }
    function selectCell2(cell) {
        var row = cell.parentNode;
        setRouteColorRed(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "";
        document.getElementById("vehicle_collector").style.display = "none";
        curRow = row;
        curRoute = cell.getAttribute("idroute");
    }
    function selectCell3(cell) {
        var row = cell.parentNode;
        setRouteColorRed(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle_collector").style.display = "";
        curRow = row;
        curRoute = cell.getAttribute("idroute");
    }
    function deleteRow(icon) {
        var cell = icon.parentNode;
        selectCell1(cell);
        var row = cell.parentNode;
        var contentCount = 0;
        for (var i = 0; i < row.cells.length - 1; i++) {
        var content = row.cells[i].textContent.trim();
        if (content !== '') {
            contentCount++;
        }
        }

        map.removeControl(lastRoute[row.childNodes[1].getAttribute("idroute")]);

        var tmp1 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button idroute="` + row.childNodes[1].getAttribute("idroute") + `" waypoint="` + row.childNodes[1].getAttribute("waypoint") + `" title="` + row.childNodes[1].getAttribute("title") + `" type="button" class="btn btn-primary" onclick="selected1(this)">
            ` + row.childNodes[1].textContent + `
            </button>
            </td>
            </tr> `;
        document.getElementById("table1body").innerHTML += tmp1;

        if (row.childNodes[3].textContent != "") {
            var tmp2 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected2(this)">
            ` + row.childNodes[3].textContent + `
            </button>
            </td>   
            </tr> `;
            document.getElementById("table2body").innerHTML += tmp2;
        }

        if (row.childNodes[5].textContent != "") {
            var tmp3 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected3(this)">
            ` + row.childNodes[5].textContent + `
            </button>
            </td>
            </tr> `;
            document.getElementById("table3body").innerHTML += tmp3;
        }

        var flag = 0;
        if (row == document.getElementById("tablemainbody").lastChild)
            flag = 1;
        row.parentNode.removeChild(row);
        if (numRow > 0)
            numRow--;

        if (numRow == 0 || flag == 1) {
            numRow++;
            var tableBody = document.getElementById("tablemainbody");
            var newRow = document.createElement("tr");
            newRow.setAttribute("id", "row" + 1);
            newRow.innerHTML = `
                <td id="cell1" class="border" onclick="selectCell1(this)" style="cursor: pointer;"><br></td>
                <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell4" class="border" onclick="" style="cursor: pointer;">
                    <img src="../asset/img/trashbin.png" onclick="deleteRow(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                </td>
            `;
            tableBody.appendChild(newRow);
        }
        
        curRow = null;
        flagDelete = 1;

        updateIdAllRow();
    }
    function selected1(button) {
        curRow.childNodes[3].setAttribute("onclick", "selectCell2(this)");
        if (lastRow != null && lastRow.childNodes[1].innerHTML != "<br>" && lastRoute[lastRow.childNodes[1].getAttribute("idroute")] != null && flagDelete == 0) {
            map.removeControl(lastRoute[lastRow.childNodes[1].getAttribute("idroute")]);
            lastRoute[lastRow.childNodes[1].getAttribute("idroute")] = L.Routing.control({
                    waypoints: lastRoute[lastRow.childNodes[1].getAttribute("idroute")].getWaypoints(),
                    routeWhileDragging: true,
                    lineOptions: {
                        styles: [{color: 'red'}]
                    },
                    fitSelectedRoutes: false
            }).addTo(map);
        }
        flagDelete = 0;
        if (curRow.childNodes[1].innerHTML != "<br>") {
            map.removeControl(lastRoute[curRow.childNodes[1].getAttribute("idroute")]);
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button idroute="` + curRow.childNodes[1].getAttribute("idroute") + `" waypoint="` + curRow.childNodes[1].getAttribute("waypoint") + `" title="` + curRow.childNodes[1].getAttribute("title") + `" type="button" class="btn btn-primary" onclick="selected1(this)">
            ` + curRow.childNodes[1].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");

            curRow.childNodes[1].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[1].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table1body").innerHTML += tmp;
            curRow.childNodes[1].setAttribute("waypoint", button.getAttribute("waypoint"));
            curRow.childNodes[1].setAttribute("idroute", button.getAttribute("idroute"));
        } else {
            var row = button.closest("tr");

            curRow.childNodes[1].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[1].appendChild(input);

            curRow.childNodes[1].setAttribute("waypoint", button.getAttribute("waypoint"));
            curRow.childNodes[1].setAttribute("idroute", button.getAttribute("idroute"));
            row.parentNode.removeChild(row);
        }
        lastRoute[button.getAttribute("idroute")] = L.Routing.control({
                waypoints: eval(button.getAttribute("waypoint")),
                routeWhileDragging: true,
                lineOptions: {
                    styles: [{color: 'green'}]
                }
        }).addTo(map);
        var latLngString = button.getAttribute("waypoint");
        var latLngArray = eval(latLngString);
        var firstLat = parseFloat(latLngArray[0].lat.toFixed(6));
        var firstLng = parseFloat(latLngArray[0].lng.toFixed(6));
        var secondLat = parseFloat(latLngArray[1].lat.toFixed(6));
        var secondLng = parseFloat(latLngArray[1].lng.toFixed(6));

        var southWest = L.latLng(firstLat, firstLng);
        northEast = L.latLng(secondLat, secondLng);
        bounds = L.latLngBounds(southWest, northEast);
        map.fitBounds(bounds);
        
        lastButton = button;
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
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[3].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table2body").innerHTML += tmp;
            lastButton= button;
        } else {
            var row = button.closest("tr");

            curRow.childNodes[3].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[3].appendChild(input);

            row.parentNode.removeChild(row);
            lastButton = button;
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
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[5].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table3body").innerHTML += tmp;
            lastButton = button;
        } else {
            var row = button.closest("tr");

            curRow.childNodes[5].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow.childNodes[5].appendChild(input);

            row.parentNode.removeChild(row);
            lastButton = button;
            numRow += 1;
            var tableBody = document.getElementById("tablemainbody");
            var newRow = document.createElement("tr");
            newRow.setAttribute("id", "row" + numRow);
            newRow.innerHTML = `
                <td id="cell1" class="border" onclick="selectCell1(this)" style="cursor: pointer;"><br></td>
                <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell4" class="border" onclick="" style="cursor: pointer;">
                    <img src="../asset/img/trashbin.png" onclick="deleteRow(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                </td>
            `;
            tableBody.appendChild(newRow);
        }
        updateIdAllRow();
    }

///////////////////////////////////////////
////////////////JANITOR_SECTION////////////////////
///////////////////////////////////////////

    function zoomArea(row) {
        var cell = row.childNodes[1];
        if (cell.innerHTML != "<br>") {
            lastArea[cell.getAttribute("idarea")].setStyle({fillColor: 'green'});
            map.fitBounds(lastArea[cell.getAttribute("idarea")].getBounds());
        }
    }

    function setAreaColorRed(row) {
        if (row.childNodes[1].innerHTML != "<br>") {
            if (curRow2 != row && curRow2!= null && lastArea[curRow2.childNodes[1].getAttribute("idarea")] != null) {
                lastArea[curRow2.childNodes[1].getAttribute("idarea")].setStyle({fillColor: 'red'});
            }
        }
        zoomArea(row);
    }
    function setAreaColor(row, color) {
            if (row!= null && lastArea[row.childNodes[1].getAttribute("idarea")] != null) {
                lastArea[row.childNodes[1].getAttribute("idarea")].setStyle({fillColor: color});
            }
    }
    function selectCell4(cell) {
        if (cell.innerHTML == "<br>") {
            lastRow2 = curRow2;
        }
        var row = cell.parentNode;
        setAreaColorRed(row);
        clearAllColorCell2();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank2").style.display = "none";
        document.getElementById("area").style.display = "";
        document.getElementById("janitor").style.display = "none";
        document.getElementById("vehicle").style.display = "none";
        curRow2 = row;
        curArea2 = cell.getAttribute("idarea");
    }
    function selectCell5(cell) {
        var row = cell.parentNode;
        setAreaColorRed(row);
        clearAllColorCell2();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank2").style.display = "none";
        document.getElementById("area").style.display = "none";
        document.getElementById("janitor").style.display = "";
        document.getElementById("vehicle").style.display = "none";
        curRow2 = row;
        curArea = cell.getAttribute("idarea");
    }
    function selectCell6(cell) {
        var row = cell.parentNode;
        setAreaColorRed(row);
        clearAllColorCell2();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank2").style.display = "none";
        document.getElementById("area").style.display = "none";
        document.getElementById("janitor").style.display = "none";
        document.getElementById("vehicle").style.display = "";
        curRow2 = row;
        curArea = cell.getAttribute("idarea");
    }
    function deleteRow2(icon) {
        var cell = icon.parentNode;
        selectCell4(cell);
        var row = cell.parentNode;
        var contentCount = 0;
        for (var i = 0; i < row.cells.length - 1; i++) {
        var content = row.cells[i].textContent.trim();
        if (content !== '') {
            contentCount++;
        }
        }

        map.removeLayer(lastArea[row.childNodes[1].getAttribute("idarea")]);

        var tmp1 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button idarea="` + row.childNodes[1].getAttribute("idarea") + `" polygon="` + row.childNodes[1].getAttribute("polygon") + `" title="` + row.childNodes[1].getAttribute("title") + `" type="button" class="btn btn-primary" onclick="selected4(this)">
            ` + row.childNodes[1].textContent + `
            </button>
            </td>
            </tr> `;
        document.getElementById("table4body").innerHTML += tmp1;

        if (row.childNodes[3].textContent != "") {
            var tmp2 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected2(this)">
            ` + row.childNodes[3].textContent + `
            </button>
            </td>   
            </tr> `;
            document.getElementById("table5body").innerHTML += tmp2;
        }

        if (row.childNodes[5].textContent != "") {
            var tmp3 = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected3(this)">
            ` + row.childNodes[5].textContent + `
            </button>
            </td>
            </tr> `;
            document.getElementById("table6body").innerHTML += tmp3;
        }

        var flag = 0;
        if (row == document.getElementById("tablemainbody2").lastChild)
            flag = 1;
        row.parentNode.removeChild(row);
        if (numRow2 > 0)
            numRow2--;

        if (numRow2 == 0 || flag == 1) {
            numRow2++;
            var tableBody = document.getElementById("tablemainbody2");
            var newRow = document.createElement("tr");
            newRow.setAttribute("id", "row" + 1);
            newRow.innerHTML = `
                <td id="cell1" class="border" onclick="selectCell4(this)" style="cursor: pointer;"><br></td>
                <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell4" class="border" onclick="" style="cursor: pointer;">
                    <img src="../asset/img/trashbin.png" onclick="deleteRow2(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                </td>
            `;
            tableBody.appendChild(newRow);
        }
        
        curRow2 = null;
        flagDelete2 = 1;

        updateIdAllRow2();
    }
    function selected4(button) {
        curRow2.childNodes[3].setAttribute("onclick", "selectCell5(this)");
        if (lastRow2 != null && lastRow2.childNodes[1].innerHTML != "<br>" && lastArea[lastRow2.childNodes[1].getAttribute("idarea")] != null && flagDelete2 == 0) {
            lastArea[lastRow2.childNodes[1].getAttribute("idarea")].setStyle({fillColor: 'red'});
        }
        flagDelete2 = 0;
        if (curRow2.childNodes[1].innerHTML != "<br>") {
            map.removeLayer(lastArea[curRow2.childNodes[1].getAttribute("idarea")]);
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button idarea="` + curRow2.childNodes[1].getAttribute("idarea") + `" polygon="` + curRow2.childNodes[1].getAttribute("polygon") + `" title="` + curRow2.childNodes[1].getAttribute("title") + `" type="button" class="btn btn-primary" onclick="selected4(this)">
            ` + curRow2.childNodes[1].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");

            curRow2.childNodes[1].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[1].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table4body").innerHTML += tmp;
            curRow2.childNodes[1].setAttribute("polygon", button.getAttribute("polygon"));
            curRow2.childNodes[1].setAttribute("idarea", button.getAttribute("idarea"));
        } else {
            var row = button.closest("tr");

            curRow2.childNodes[1].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[1].appendChild(input);

            curRow2.childNodes[1].setAttribute("polygon", button.getAttribute("polygon"));
            curRow2.childNodes[1].setAttribute("idarea", button.getAttribute("idarea"));
            row.parentNode.removeChild(row);
        }
        lastArea[button.getAttribute("idarea")] = L.polygon([
            eval(button.getAttribute("polygon"))
        ]).addTo(map);
        lastArea[button.getAttribute("idarea")].setStyle({fillColor: 'green'})
        map.fitBounds(lastArea[button.getAttribute("idarea")].getBounds());
        
        lastButton2 = button;
    }
    function selected5(button) {
        curRow2.childNodes[5].setAttribute("onclick", "selectCell6(this)");
        if (curRow2.childNodes[3].innerHTML != "<br>") {
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected5(this)">
            ` + curRow2.childNodes[3].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");
 
            curRow2.childNodes[3].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[3].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table5body").innerHTML += tmp;
            lastButton2 = button;
        } else {
            var row = button.closest("tr");

            curRow2.childNodes[3].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[3].appendChild(input);

            row.parentNode.removeChild(row);
            lastButton2 = button;
        }
    }
    function selected6(button) {
        if (curRow2.childNodes[5].innerHTML != "<br>") {
            var tmp = 
            `<tr class="row100 body">
            <td class="cell100 column1">
            <button type="button" class="btn btn-primary" onclick="selected6(this)">
            ` + curRow2.childNodes[5].textContent + `
            </button>
            </td>
            </tr> `;
            var row = button.closest("tr");

            curRow2.childNodes[5].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[5].appendChild(input);

            row.parentNode.removeChild(row);
            document.getElementById("table6body").innerHTML += tmp;
            lastButton2 = button;
        } else {
            var row = button.closest("tr");

            curRow2.childNodes[5].innerHTML = button.textContent;
            var input = document.createElement("input");
            input.type = "text";
            input.value = button.textContent;
            input.style.display = "none";
            curRow2.childNodes[5].appendChild(input);

            row.parentNode.removeChild(row);
            lastButton2 = button;
            numRow2 += 1;
            var tableBody = document.getElementById("tablemainbody2");
            var newRow = document.createElement("tr");
            newRow.setAttribute("id", "row" + numRow);
            newRow.innerHTML = `
                <td id="cell1" class="border" onclick="selectCell4(this)" style="cursor: pointer;"><br></td>
                <td id="cell2" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell3" class="border" onclick ="" style="cursor: pointer;"><br></td>
                <td id="cell4" class="border" onclick="" style="cursor: pointer;">
                    <img src="../asset/img/trashbin.png" onclick="deleteRow2(this)" style="margin-left: 16px;  max-width: 40%;"></img>
                </td>
            `;
            tableBody.appendChild(newRow);
        }
        updateIdAllRow2();
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
            crossorigin="anonymous">
</script>