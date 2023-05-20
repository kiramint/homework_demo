<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->   <!--你没开 PHP ！！-->
<!--假装服务器收到消息并且存入了数据库-->
<?php
$sessionid = null;
if (isset($_POST["article"])) {
    $article = $_POST["article"];
    $logstate = isset($_COOKIE["login_status"]);
    if (isset($_COOKIE["login_status"])) {
        $sessionid = $_COOKIE["login_status"];
    }
    ?>
    <!doctype html>
    <html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/framework.css" rel="stylesheet" type="text/css">
        <script src="js/framework.js" type="text/javascript"></script>
        <script src="framework/marked/marked.min.js" type="text/javascript"></script>
        <link href="framework/marked/github-markdown.css" rel="stylesheet" type="text/css">
        <link href="framework/highlight_js/styles/vs.min.css" rel="stylesheet" type="text/css">
        <script src="framework/highlight_js/highlight.min.js" type="text/javascript"></script>
        <script>hljs.highlightAll();</script>
        <title>Kira's Site</title>
        <style>
            .text-fram {
                background-color: white;
                border: var(--bs-gray-300) 2px solid;
                border-radius: 5px;
                padding: 15px;
                width: 100%;
                height: fit-content;
                resize: none;
            }

            .font-jetbrain {
                font-family: jetbrain, sans-serif;
                white-space: pre;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
    <div class="doc-block">
        <?php
        if ($logstate) {
            echo "<h1>您已登录</h1>";
            echo "<small>您的session_id:$sessionid</small>";
        } else {
            echo "<h1>您还没登录</h1>";
            echo "<a href='login.html' class='button'>快去登录！！</a>";
        }
        ?>


        <h3>你提交的markdown文章(RAW_DATA & HTML)</h3>
        <p style="float: left"><small>假装服务器收到消息并且存入了数据库😉</small></p>
        <button onclick="window.history.back()" class="button" style="background-color: var(--bs-primary);float: right">
            ← 返回上一步
        </button>
        <pre class="text-fram" style="clear: both;padding: 0 !important;">
        <code class="font-jetbrain language-markdown hljs">
<?php
echo $article;
?>
        </code>
        </pre>
        <div id="fram" class="text-fram markdown-body">
            <label for="text" class="d-none"></label>
            <textarea class="text-fram font-jetbrain" id="text">
<?php
echo $article;
?>
            </textarea>
        </div>
        <script>
            document.querySelector("#fram").innerHTML = marked.parse(document.querySelector("#text").value);
        </script>
    </div>
    </body>
    </html>

    <?php
} else {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kira's Site</title>
        <link href="css/framework.css" rel="stylesheet" type="text/css">
        <script src="js/framework.js" type="text/javascript"></script>
        <style>
            body{
                font-family: yaheiFont, sans-serif; /*Mozilla Hotfix*/
            }
        </style>
    </head>
    <body>
    <div class="doc-block d-grid">
        <h1 class="self-center" style="margin: 10px">别直接打开PHP页面啊！！</h1>
        <a href="index.html" class="button self-center" style="margin: 10px">返回主页</a>
        <a href="login.html" class="button self-center" style="margin: 10px">返回登录</a>
        <button onclick="window.history.back()" class="button self-center"
                style="background-color: var(--bs-primary);margin: 10px;">← 返回上一步
        </button>
    </div>
    </body>
    </html>
    <?php
}
?>