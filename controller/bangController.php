<?php
class bang extends Controller {
    function default() {
        $this->view("home");
    }
    function mainpage() {
        $chay = $this->model("mainpageModel");
        # Tong so luong
        $TongCol = $chay->collectors();
        $TongJan = $chay->janitors();
        $TongVehicle = $chay->vehicles();
        $TongTroller = $chay->trollers();
        $TongArea = $chay->Areas();
        $TongRoute = $chay->routes();
        # So luong dang hoat dong
        $SoCol = $chay->CollectorsWork();
        $SoJan = $chay->JanitorsWork();
        $SoVehi = $chay->VehiclesWork();
        $SoTroll = $chay->TrollersWork();
        $SoAre = $chay->AreasWork();
        $SoRou = $chay->RoutesWork();
        # Dem so luong
        $SoCollectors = $SoCol->num_rows;
        $SoJanitors = $SoJan->num_rows;
        $SoVehicles = $SoVehi->num_rows;
        $SoTrollers = $SoTroll->num_rows;
        $SoAreas = $SoAre->num_rows;
        $SoRoutes = $SoRou->num_rows;
        $Collectors = $TongCol->num_rows;
        $Janitors = $TongJan->num_rows;
        $Vehicles = $TongVehicle->num_rows;
        $Trollers = $TongTroller->num_rows;
        $Areas = $TongArea->num_rows;
        $Routes = $TongRoute->num_rows;
        $this->view("mainpage", [
            "col1" => $Collectors,
            "jan1" => $Janitors,
            "vehi1" => $Vehicles,
            "troll1" => $Trollers,
            "area1" => $Areas,
            "rou1" => $Routes,
            "col2" => $SoCollectors,
            "jan2" => $SoJanitors,
            "vehi2" => $SoVehicles,
            "troll2" => $SoTrollers,
            "area2" => $SoAreas,
            "rou2" => $SoRoutes
        ]);


    }
}
?>