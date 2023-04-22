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
        <div class="mymap col-4">
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
    var curRow = null;
    var curRoute;
    var numRow = 1;
    var flagAddRow = 0;
    var lastButton;
    var flagDelete = 0;
    var lastRow = null;
    const lastRoute = new Array(100).fill(null);

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

    function clearAllColorCell() {
        var table = document.getElementById("tablemain");
        var cells = table.getElementsByTagName("td");
        for (var i = 0; i < cells.length; i++) {
            cells[i].style.backgroundColor = "white";
        }
    }

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

    function setRouteColor(row) {
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

    function selectCell1(cell) {
        if (cell.innerHTML == "<br>") {
            lastRow = curRow;
        }
        var row = cell.parentNode;
        setRouteColor(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle").style.display = "none";
        curRow = row;
        curRoute = cell.getAttribute("idroute");
    }
    function selectCell2(cell) {
        var row = cell.parentNode;
        setRouteColor(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "";
        document.getElementById("vehicle").style.display = "none";
        curRow = row;
        curRoute = cell.getAttribute("idroute");
    }
    function selectCell3(cell) {
        var row = cell.parentNode;
        setRouteColor(row);
        clearAllColorCell();
        cell.style.backgroundColor = "#dbdbdb";
        document.getElementById("blank").style.display = "none";
        document.getElementById("route").style.display = "none";
        document.getElementById("collector").style.display = "none";
        document.getElementById("vehicle").style.display = "";
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
            row.parentNode.removeChild(row);
            document.getElementById("table1body").innerHTML += tmp;
            curRow.childNodes[1].setAttribute("waypoint", button.getAttribute("waypoint"));
            curRow.childNodes[1].setAttribute("idroute", button.getAttribute("idroute"));
        } else {
            var row = button.closest("tr");
            curRow.childNodes[1].innerHTML = button.textContent;
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
            row.parentNode.removeChild(row);
            document.getElementById("table2body").innerHTML += tmp;
            lastButton= button;
        } else {
            var row = button.closest("tr");
            curRow.childNodes[3].innerHTML = button.textContent;
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
            row.parentNode.removeChild(row);
            document.getElementById("table3body").innerHTML += tmp;
            lastButton = button;
        } else {
            var row = button.closest("tr");
            curRow.childNodes[5].innerHTML = button.textContent;
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
    }
</script>
