<?php 
    require_once("header.php");
?>
<table style="width:80% ">

<tr>
    <th>Mã số</th>
    <th>Biến số xe</th>
    <th>Sức chứa</th>
    <th>Tài xế</th>
    <th>Loại xe</th>
    <th>Trọng lượng</th>
    <th>Mức tiêu thụ nhiên liệu</th>
</tr>
<?php 
$result = $data["dataVehicle"];
    while($row = $result->FETCH_ASSOC()){
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
?>
</table>