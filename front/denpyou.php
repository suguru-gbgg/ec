<?php

    session_start();

    require "../server/cart.php";
    require "../server/get_user.php";
    require "../server/get_value.php";

    $cart = new cart;
    $item_name = $cart -> get_cart($_SESSION["login_user_name"]);

    $count = count($item_name);

    for($i=0;$i<$count;$i++){
        echo $item_name[$i]."</br>";
    }

    $kojin = new kojinjouhou;
    $datas = $kojin -> kojinn($_SESSION["login_user_name"]);

    foreach($datas as $data){
        echo "名前:".$data["name"]."</br>";
        echo "住所:".$data["juusyo"]."</br>";
        echo "電話番号:".$data["dennwa"]."</br>";
    }

    $value = new item_value;
    $oder_value = $value -> value($_SESSION["login_user_name"]);
    echo "合計".$oder_value."円";

?>

<html>
    
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>

    <form action="../server/seiri.php" method="GET">
        <button type="submit" name="seiri" class="btn btn-secondary">トップページへ戻る</button>
    </form>
</html>

