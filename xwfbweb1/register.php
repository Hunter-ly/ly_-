<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<body>
<?php

    header("Content-Type: text/html;charset=utf-8");
    //建立连接
    $conn = mysqli_connect('localhost','root','root');
    if($conn){
        //数据库连接成功
        $select = mysqli_select_db($conn,"guanli");     //选择数据库
        if(isset($_POST["subr"])){

            $user = $_POST["username"];
            $pass = $_POST["password"];
            $re_pass = $_POST["re_password"];

            if($user == ""||$pass == ""){
                //用户名or密码为空
                echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
                echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."registerhtml.php"."\""."</script>";
                exit;
            }
            if($pass == $re_pass){
                //两次密码输入一致
                mysqli_set_charset($conn,'utf8');   //设置编码

                //sql语句
                $sql_select = "select username from user where username = '$user'";
                //sql语句执行
                $result = mysqli_query($conn,$sql_select);
                //判断用户名是否已存在
                $num = mysqli_num_rows($result);

                if($num){
                    //用户名已存在
                    echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名已存在！"."\"".")".";"."</script>";
                    echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."registerhtml.php"."\""."</script>";
                    exit;
                }else{
                    //用户名不存在
                    $sql_insert = "insert into user(username,password) values('$user','$pass')";
                    //插入数据
                    $ret = mysqli_query($conn,$sql_insert);
                    $row = mysqli_fetch_array($ret);
                    //跳转注册成功页面
                    header("Location:registersucc.php");
                }
            }else{
                //两次密码输入不一致
                echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."两次密码输入不一致！"."\"".")".";"."</script>";
                echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."registerhtml.php"."\""."</script>";
                exit;
            }
        }
        //关闭数据库
        mysqli_close($conn);
    }else{
        //连接错误处理
        die('Could not connect:'.mysql_error());
    }

?>
</body>
</html> -->


<?php
    header("content-type:text/html;charset=utf-8");
    //连接数据库
    $link = mysqli_connect("localhost","root","root","guanli");
    if (!$link) {
        die("连接失败: " . mysqli_connect_error());
    }
    //接收$_POST用户名和密码
    $username=$_POST['username'];
    $password=$_POST['password'];
    //查看表user用户名是否存在或为空
    $sql_select = "SELECT * FROM user WHERE username = '$username'";
    //result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
    $select = mysqli_query($link,$sql_select);
    $num = mysqli_num_rows($select);//函数返回结果集中行的数量
    if($username == "" || $password == "")
    {
        echo "请确认信息完整性";
    }else if($num){
        echo "已存在用户名";//已存在账户名输出错误
    }else{
            $sql="insert into user(username,password) values('$username','$password')";
            $result=mysqli_query($link,$sql);
            //判断是否注册后显示内容
            if(!$result)
            {
                echo "注册不成功！"."<br>";//输出错误
                echo "<a href='login.php'>返回</a>";//超链接到首页
            }
            else
            {
                echo "注册成功!"."<br/>";//输出成功
                echo "<a href='login.php'>立刻登录</a>";//超链接到首页
            }
        }

?>
