<html>
<?php

    require "../server/get_syohin.php";

    $get_syohin = new syohin;
    $datas = $get_syohin -> get_syohin();

    foreach($datas as $data){

        echo "<form action='syousai.php' method='GET'>";
            echo "<button type='submit' name='id' value=".$data['id'].">".$data['item_name']."</button>";
            echo $data["item_value"]."円"."</br>";
        echo "</form>";
    }
?>