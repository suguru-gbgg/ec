<html>
    <?php

        session_start();
        if(empty($_SESSION["login_user_name"])){
            header('Location: http://localhost/work/ec/front/erro_signin.php');
        }

        require "../server/get_syohin.php";

        $get_syohin = new syohin;
        $datas = $get_syohin -> get_syohin();

        foreach($datas as $data){

            echo "<form action='syousai.php' method='GET'>";
                echo "<button type='submit' name='id' value=".$data['id'].">".$data['item_name']."</button>";
                echo $data["item_value"]."円"."</br>";
            echo "</form>";
            echo "<form action='../server/cart_insert.php' method='GET'>";
                echo "<button type='submit' name='id' value=".$data['id'].">カートに追加</button>"; 
            echo "</form>";
        }
    ?>

    <form action="cart.php" method="post">
        <button type="submit" name="cart">カートを見る</button>
    </form>
</html>