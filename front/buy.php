<html>

    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>

    <div class="text-center">
        <form action="../server/buy.php" method="POST">
            <input type="text" name=name placeholder="名前" class="text-center">
            <input type="text" name=jusyo placeholder="住所" class="text-center">
            <input type="number" name=dennwa placeholder="電話" class="text-center">
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>

</html>