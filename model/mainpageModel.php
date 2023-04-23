
<?php
    class mainpageModel extends Database {
        # Lấy số lượng
        function CollectorsWork() {
            $qr = "SELECT * FROM task WHERE id_employee LIKE '1%' AND `state` = 1";
            return mysqli_query($this->conn, $qr);
        }
        function JanitorsWork() {
            $qr = "SELECT * FROM task WHERE id_employee LIKE '2%' AND `state` = 1";
            return mysqli_query($this->conn, $qr);
        }
        function VehiclesWork() {
            $qr = "SELECT * FROM task WHERE id_employee LIKE '1%' AND `state` = 1";
            return mysqli_query($this->conn, $qr);
        }
        function TrollersWork() {
            $qr = "SELECT * FROM task WHERE id_employee LIKE '2%' AND `state` = 1";
            return mysqli_query($this->conn, $qr);
        }
        function AreasWork() {
            $qr = "SELECT DISTINCT assigned_area FROM task";
            return mysqli_query($this->conn, $qr);
        }
        function RoutesWork() {
            $qr = "SELECT assigned_route FROM task";
            return mysqli_query($this->conn, $qr);
        }
        # Lấy Tổng
        function collectors() {
            $qr = "SELECT * FROM employee WHERE position = 'collector'";
            return mysqli_query($this->conn, $qr);
        }
        function janitors() {
            $qr = "SELECT * FROM employee WHERE position = 'janitor'";
            return mysqli_query($this->conn, $qr);
        }
        function vehicles() {
            $qr = "SELECT * FROM vehicle WHERE `type` = 'Vehicle_Collector'";
            return mysqli_query($this->conn, $qr);
        }
        function trollers() {
            $qr = "SELECT * FROM vehicle WHERE `type` = 'Troller'";
            return mysqli_query($this->conn, $qr);
        }
        function Areas() {
            $qr = "SELECT * FROM area";
            return mysqli_query($this->conn, $qr);
        }
        function Routes() {
            $qr = "SELECT * FROM `route`";
            return mysqli_query($this->conn, $qr);
        }

    }

?>
