<?php

    require "../server/get_syohin.php";

    $get_syohin = new syohin;
    $datas = $get_syohin -> get_syohin();

    foreach($datas as $data){
        echo $data["item_name"];
        echo $data["item_value"];
    }

?>