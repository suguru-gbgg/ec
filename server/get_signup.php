<?php

    $signup = new signup;
    $signup -> signup();

    class signup{

        function signup(){

            if(empty($_GET["user_id"])||empty($_GET["pass"])){
                    
                header('Location: http://localhost/work/ec/front/erro_signup.php');
                exit;

            }

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT `user_id` FROM `users` WHERE user_id ='".$_GET['user_id']."'";
            echo $sql;
            $datas = $pdo -> query($sql);
            
            foreach($datas as $data){
                if($data["user_id"] == $_GET["user_id"]){
                    header('Location: http://localhost/work/ec/front/erro_signup_id.php');
                    exit;
                } 
            }

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "INSERT INTO `users`(`user_id`, `pass`) VALUES ('".$_GET['user_id']."','".$_GET['pass']."')";
            $pdo -> query($sql);
            header('Location: http://localhost/work/ec/front/signin.php'); 
            exit;
            }
    }

?>