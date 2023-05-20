<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--这个是用PHP写的登录处理界面，得把网页放到有php的服务器里才能使用，推荐XAMPP-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/framework.css" rel="stylesheet" type="text/css">
    <script src="js/framework.js" type="text/javascript"></script>
    <style>
        body{
            font-family: yaheiFont, sans-serif; /*Mozilla Hotfix*/
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="doc-block">
        <?php
        if (isset($_COOKIE["login_status"])){
            $sessionid=$_COOKIE["login_status"];
            setcookie("login_status", session_id(), time() - 1);
            unset($_SESSION["ifLogin"]);
            unset($_SESSION["logstate"]);
            unset($_SESSION["admin"]);
            ?>
            <h1>您已登出</h1>
            <?php
            echo "<p>您的session_id:$sessionid</p>"
            ?>
            <a href="index.html" class="button">返回主页</a>
            <a href="login.html" class="button">返回登录</a>
            <?php
        }else{
        ?>
            <h1>你还没登录呢</h1>
            <a href="login.html" class="button">登录</a>
        <?php
        }
        ?>
    </div>
</body>
</html>
