<?php

    require "../server/cart.php";
    $cart = new cart;
    $item_name = $cart -> get_cart();
    
    $count = count($item_name);

    for($i=0;$i<$count;$i++){
    echo $item_name[$i]."</br>";
    }

?>