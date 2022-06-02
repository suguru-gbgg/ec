<?php

    class kojinjouhou{

        function kojinn($login_user_name){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT * FROM `kojinnjyouhou` WHERE user_id = '".$login_user_name."'";
            $datas = $pdo -> query($sql);

            return $datas;
        }
    }
?>