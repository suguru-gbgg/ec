<html>

    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>


    <?php

        session_start();
        if(empty($_SESSION["login_user_name"])){
            header('Location: http://localhost/work/ec/front/erro_signin.php');
        }


        require "../server/get_syohin.php";
        $get_syohin = new syohin;
        $datas = $get_syohin -> get_syohin_syousai($_GET["id"]);

        foreach($datas as $data){
    ?>

    <div class="d-flex justify-content-center">
        <table class="table w-75 p-3">
            <tbody>
                <tr>
                    <th scope="row">商品名</th>
                    <td><?php echo $data["item_name"]?></td>
                </tr>
                <tr>
                    <th scope="row">詳細</th>
                    <td><?php echo $data["item_contents"]?></td>
                </tr>
                <tr>
                    <th scope="row">値段</th>
                    <td colspan="2"><?php echo $data["item_value"]?>円</td>
                </tr>
       
        <?php
        }
        ?>
        <tr>
            <td>
                <form action="top_page.php">
                    <button type="submit" class='btn btn-primary'>戻る</button>
                </form>
            </td>
        </tr>
        </tbody>
        </table>
    </div>

</html>