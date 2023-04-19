<?php 
        echo '<pre>';
            print_r($data["datamcp"]);
        echo '</pre>';
    require_once ("header.php");
?>
<table style="width:80% ">

        <tr>
            <th>Mã số</th>
            <th>Sức chứa tối đa</th>
            <th>Sức chứa hiện tại</th>
            <th>Vị trí</th>
        </tr>
        <?php 
        $result = $data["datamcp"];
        if($result && $result->num_rows > 0){
            while($row = $result->FETCH_ASSOC()){
                $str="<tr >
                <td>".$row["id_mcp"]."</td>
                <td>".$row["max_capacity"]."</td>
                <td>".$row["current_capacity"]."</td>
                <td>".$row["location"]."</td>
            </tr>";
                    echo $str;
            }
        }
        ?>
    </table>