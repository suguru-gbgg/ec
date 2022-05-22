<?php

class syohin{

    function get_syohin(){

        $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
        $sql = "SELECT * FROM `items`";
        $datas = $pdo -> query($sql);

        return $datas;
    }
}
?>