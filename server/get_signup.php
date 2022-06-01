<?php

    $signup = new touroku;
    $signup -> signup($_GET["user_id"],$_GET["pass"]);

    class touroku{

        function signup($user_id,$pass){
            echo $user_id;

            if(empty($user_id)||empty($pass)){
                    
                header('Location: http://localhost/work/ec/front/erro_signup.php');
                exit;

            }

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT `user_id` FROM `users` WHERE user_id ='".$user_id."'";
            $datas = $pdo -> query($sql);
            
            foreach($datas as $data){
                if($data["user_id"] == $user_id){
                    header('Location: http://localhost/work/ec/front/erro_signup_id.php');
                    exit;
                } 
            }

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "INSERT INTO `users`(`user_id`, `pass`) VALUES ('".$user_id."','".$pass."')";
            $pdo -> query($sql);
            header('Location: http://localhost/work/ec/front/signin.php'); 
            exit;
        }
    }
    

?>