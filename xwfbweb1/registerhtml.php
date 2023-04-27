<!-- <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>注册用户</title>
    </head>

    <body>
        <form action = "register.php" method = "post">
            <p>用户名:<input type="text" name="username"></p>
            <p>密码:<input type="text" name="password"></p>
            <p>确认密码:<input type = "text" name = "re_password"></p>
            <p><input type="submit" value="立即注册" name="subr"></p>
</form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>注册</title>
    <link rel="stylesheet" href="register.css">
    <meta name="content-type"; charset="UTF-8">
</head>
</head>
<body>
<div id="bigBox">
        <h1>注册页面</h1>


        <form action="register.php" method="post">
            <div class="inputBox">

                <div class="inputText">
                <input type="text" id="id_name" name="username" required="required" placeholder="Username">
                </div>
                <div class="inputText">
                <input type="password" id="password" name="password" required="required" placeholder="Password">
                </div>
                <div class="inputText">
                <input type="password" id="re_password" name="re_password" required="required" placeholder="PasswordAgain">
                </div>
<!--                 <div class="inputText m-plc" style="color: white;opacity: 70%">
                    Sex：
                <input type="radio" id="sex" name="sex" value="mam" style="color: white">男
                <input type="radio" id="sex" name="sex" value="woman" style="color: white">女
                </div> -->
                <!-- <div class="inputText">
                <input type="text" id="qq" name="qq" required="required" placeholder="QQ">
                </div> -->
                <!-- <div class="inputText">
                <input type="email" id="email" name="email" required="required" placeholder="Email">
                </div>
                <div class="inputText">
                <input type="text" id="phone" name="phone" required="required" placeholder="Phone">
                </div>
                <div class="inputText">
                <input type="text" id="address" name="address" required="required" placeholder="Address">
                </div> -->
                <br>
                <div style="color: white;font-size: 12px">

                </div>
            </div>
            <div>
                <input type="submit" id="register" name="register" value="注册" class="loginButton m-left">
                <input type="reset" id="reset" name="reset" value="重置" class="loginButton">
            </div>

            <div class="register">
            <a href="login.php" style="color: white">已有账号，去登录</a>
            </div>
        </form>
</div>
</body>
</html>
<?php
                $err = isset($_GET["err"]) ? $_GET["err"] : "";
                switch ($err) {
                    case 1:
                        echo "用户名已存在！";
                        break;

                    case 2:
                        echo "密码与重复密码不一致！";
                        break;

                    case 3:
                        echo "注册成功！";
                        break;
                }
                ?>