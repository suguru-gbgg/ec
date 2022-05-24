<?php

class syohin{

    function get_syohin(){

        $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
        $sql = "SELECT * FROM `items`";
        $datas = $pdo -> query($sql);

        return $datas;
    }

    function get_syohin_syousai($item_id){

        $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
        $sql = "SELECT * FROM `items` WHERE id =" .$item_id;
        $datas = $pdo -> query($sql);
        return $datas;    

    }
}
?>