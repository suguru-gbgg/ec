<?php
    require "../server/get_syohin.php";
    $get_syohin = new syohin;
    $datas = $get_syohin -> get_syohin_syousai($_GET["id"]);

    foreach($datas as $data){
        echo $data["item_name"];
        echo $data["item_contents"];
        echo $data["item_value"];
    }

?>