<html>

    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>

    <?php

        session_start();

        require "../server/cart.php";
        $cart = new cart;
        $item_name = $cart -> get_cart($_SESSION["login_user_name"]);
        
        $count = count($item_name);
    ?>

    <div class="d-flex justify-content-center">
        <table class="table w-75 p-3">
            <thead>
                <tr>
                    <th scope="col">商品名</th>
                </tr>
            </thead>
            <tbody>

                 <?php
                    for($i=0;$i<$count;$i++){
                ?>

                        <tr>
                            <td><?php echo $item_name[$i]."</br>";?></td>
                        </tr>

                 <?php
                    }
                ?>
                <tr>
                    <td>
                        <form action='buy.php'>
                            <button type='submit' name='buy' class='btn btn-primary'>購入する</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    
    </div>
        
    

</html>