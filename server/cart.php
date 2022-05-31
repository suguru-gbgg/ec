<?php
    
    session_start();

    class cart{

        function cart_insert($item_id){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "INSERT INTO `cart`(`user_id`, `item_id`) VALUES ('".$_SESSION['login_user_name']."','".$item_id."')";
            $pdo -> query($sql);
            header('Location: http://localhost/work/ec/front/cart.php');
        }

       
        function get_cart(){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT * FROM `cart` WHERE user_id ='".$_SESSION['login_user_name']."'";
            $datas = $pdo -> query($sql);

            $item_names = array();
            foreach($datas as $data){
                $pdo1 = new PDO('mysql:host=localhost;dbname=ec;','root','');
                $sql1 = "SELECT * FROM `items` WHERE id = '".$data['item_id']."'";
                $items = $pdo1 -> query($sql1);
                foreach($items as $item){}
                array_push($item_names,$item["item_name"]);
            }
            return $item_names;
        }
    }
?>