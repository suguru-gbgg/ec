<?php

    session_start();

   

    kojin($_POST["name"],$_POST["jusyo"],$_POST["dennwa"],$_SESSION["login_user_name"]);

    function kojin($name,$jusyo,$dennwa,$login_user_name){
        require "get_user.php";
        $kojin = new kojinjouhou;
        $datas = $kojin -> kojinn($_SESSION["login_user_name"]);
    
        foreach($datas as $data){
        }

        $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
        if(empty($data["name"])){
            $sql = "INSERT INTO `kojinnjyouhou`(`name`, `juusyo`, `dennwa`, `user_id`) VALUES ('".$name."','".$jusyo."','".$dennwa."','".$login_user_name."')";
        }else{
            $sql = "UPDATE `kojinnjyouhou` SET `name`='".$name."',`juusyo`='".$jusyo."',`dennwa`='".$dennwa."',`user_id`='".$login_user_name."' WHERE user_id = '".$login_user_name."'";
        }
        $pdo -> query($sql);

        header("Location: ../front/denpyou.php");
    }
?>