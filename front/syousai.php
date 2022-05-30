<?php

    session_start();
    if(empty($_SESSION["login_user_name"])){
        header('Location: http://localhost/work/ec/front/erro_signin.php');
    }


    require "../server/get_syohin.php";
    $get_syohin = new syohin;
    $datas = $get_syohin -> get_syohin_syousai($_GET["id"]);

    foreach($datas as $data){
        echo $data["item_name"];
        echo $data["item_contents"];
        echo $data["item_value"];
    }

?>