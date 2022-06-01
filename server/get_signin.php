<?php

    session_start();

    $signin = new login;
    $signin -> signin($_GET["user_id"],$_GET["pass"]);

    class login{
        function signin($user_id,$pass){

            $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
            $sql = "SELECT * FROM `users` WHERE user_id ='".$user_id."'AND pass ='".$pass."'";
            $datas = $pdo -> query($sql);
        
            foreach($datas as $data){   
            }

            if(isset($data["user_id"])){
                $_SESSION["login_user_name"] = $user_id;
                header('Location: http://localhost/work/ec/front/top_page.php');
            }else{
                header('Location: http://localhost/work/ec/front/erro_signin.php');
            }   
        } 
    }
?>