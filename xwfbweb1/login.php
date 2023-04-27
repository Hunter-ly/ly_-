<!-- <h1>会员登录</h1>
<form  action="chuli2.php"  method="post">
   账号：<input type="text" name="user"/>
<p>密码：<input type="password" name="pwd"/>
<p><input type="submit" name="dl" value="登录"/>
<a href = "register.html">注册</a>
</form> -->

<!DOCTYPE html>
<html>
<head>
    <title>登录界面</title>
    <link rel="stylesheet" href="login.css">
    <meta name="content-type"; charset="UTF-8">
</head>
<body>
<div id="bigBox">
        <h1>用户登录</h1>

        <form id="loginform" action="chuli2.php" method="post">
            <div class="inputBox">

                    <div class="inputText">

                    <input type="text" id="name" name="username" placeholder="Username" value="">
                    </div>
                <div class="inputText">
                   <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <br >
                <div style="color: white;font-size: 12px" >
                    <?php
                    $err = isset($_GET["err"]) ? $_GET["err"] : "";
                    switch ($err) {
                        case 1:
                            echo "用户名或密码错误！";
                            break;

                        case 2:
                            echo "用户名或密码不能为空！";
                            break;
                    } ?>
                </div>
                <div class="register">
                    <a href="registerhtml.php" style="color: white">注册账号</a>
                </div>

            </div>
           <div>
               <input type="submit" id="login" name="login" value="登录" class="loginButton m-left">

           </div>
</div>
</div>
</form>
</body>
</html>

