<?php

    class item_value{

        function value(){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT * FROM `cart` WHERE user_id ='".$_SESSION['login_user_name']."'";
            $datas = $pdo -> query($sql);

            $value = 0;
            foreach($datas as $data){
                $pdo1 = new PDO('mysql:host=localhost;dbname=ec;','root','');
                $sql1 = "SELECT * FROM `items` WHERE id = '".$data['item_id']."'";
                $items = $pdo1 -> query($sql1);
                foreach($items as $item){}
                $value = $value + $item["item_value"];
            }
            return $value;
        }
    }

?>