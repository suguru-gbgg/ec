<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>ECサイト</title>
</head>

    <?php

        session_start();
        if(empty($_SESSION["login_user_name"])){
            header('Location: http://localhost/work/ec/front/erro_signin.php');
        }

        require "../server/get_syohin.php";

        $get_syohin = new syohin;
        $datas = $get_syohin -> get_syohin();

        echo '<div class="row">';
        
        foreach($datas as $data){
        ?>
        
            <div class="col-3">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $data['item_name'];?></h5>
                        <p class="card-text text-center"><?php echo $data["item_value"];?>円</p>
                        <form action='syousai.php' method='GET'>
                            <button type='submit' name='id' class='btn btn-outline-primary' value=<?php echo $data['id'];?>>詳細</button>
                        </form>
                            <form action='../server/cart_insert.php' method='GET'>
                                <button type='submit' name='id' class='btn btn-secondary' value=<?php echo $data['id'];?>>カートに追加</button>
                            </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>

    <form action="cart.php" method="post">
        <button type="submit" name="cart"  class="btn btn-dark">カートを見る</button>
    </form>
</html>