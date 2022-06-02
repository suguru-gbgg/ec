<?php

    class kojinjouhou{

        function kojinn(){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT * FROM `kojinnjyouhou` WHERE user_id = '".$_SESSION['login_user_name']."'";
            $datas = $pdo -> query($sql);

            return $datas;
        }
    }
?>