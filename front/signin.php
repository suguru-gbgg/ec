<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <title>ECサイト</title>
    </head>
    
    <div class="text-center">
        <form action="../server/get_signin.php" method="GET">
            <input type="text" name="user_id" placeholder="ユーザID" class="text-center">
            <input type="password" name="pass" placeholder="パスワード" class="text-center">
            <button type="submit" class='btn btn-primary'>サインイン</button>
        <form>
    </div>

</html>