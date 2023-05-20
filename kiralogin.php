<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--这个是用PHP写的登录处理界面，得把网页放到有php的服务器里才能使用，推荐XAMPP-->
<!--账号：root 密码：123456-->
<?php
$username = null;
$password = null;
$remember = null;
$salt = '好咸的盐！🤮';
$hashVal = null;
if (session_status() == PHP_SESSION_NONE && !isset($_COOKIE["login_status"])) {
    if(isset($_POST["identity"])){
        $username = $_POST["identity"];
        $password = $_POST["password"];
        $remember = $_POST["remember"];
    }

    $hashVal = hash("sha256", $password . $salt);
    $correctPasswordHash = "7e7bedbc686c58810c508854bc0115d0ca03134b235214f633c545a8b39e285d";
    $ifLogin = false;
    if ($hashVal == $correctPasswordHash && $username == "root") {
        $ifLogin = true;
        session_start();
        $_SESSION["ifLogin"] = $ifLogin;
        $_SESSION["logstate"] = 1;
        $_SESSION["admin"] = null;
        setcookie("login_status", session_id(), time() + 3600);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/framework.css" rel="stylesheet" type="text/css">
    <script src="js/framework.js" type="text/javascript"></script>
    <title>Kira Login</title>
    <style>
        body{
            font-family: yaheiFont, sans-serif;
        }
    </style>
</head>
<body>
<div class="doc-block">


    <?php
    if (isset($_SESSION["ifLogin"]) && $_SESSION["ifLogin"]) {
        ?>
        <h1>登录成功</h1>
        <?php
        $sessionid=session_id();
        echo "<h5>您的session_id: $sessionid</h5>";
    } elseif (session_status() == PHP_SESSION_ACTIVE || isset($_COOKIE["login_status"])) {
        ?>
        <h1>您已经登录</h1>
        <?php
        $sessionid=$_COOKIE["login_status"];
        echo "<h5>您的session_id: $sessionid</h5>";
    } else {
        ?>
        <h1>登录失败</h1>
    <?php }
    ?>
    <h3><?php echo "想啥呢，没后端~"; ?></h3>

    <?php
    if (isset($_SESSION["ifLogin"]) && $_SESSION["ifLogin"]) {
        $_SESSION["ifLogin"] = false;
        ?>
        <h5><?php echo "输入的账号：$username"; ?></h5>
        <h5><?php echo "输入的密码：$password"; ?></h5>
        <h5><?php echo "密码哈希Salt：$salt"; ?></h5>
        <h5><?php echo "输入密码的Hash：$hashVal"; ?></h5>
        <br>
        <?php
    }
    ?>
    <h5 style="color: var(--red)"><?php echo "正确用户名：root"; ?></h5>
    <h5 style="color: var(--red)"><?php echo "正确密码：123456"; ?></h5>
    <h5><?php echo '加密PHP算法: &nbsp;&nbsp; $hashVal = hash("sha256", $password . $salt);'; ?></h5>
    <?php
    if (session_status() == PHP_SESSION_ACTIVE || isset($_COOKIE["login_status"])) {
        ?>
        <a href="logout.php" class="button">退出登录</a>
        <?php
    }
    ?>
    <button onclick="window.history.back()" class="button" style="background-color: var(--bs-primary);">← 返回</button>
</div>
</body>
</html>