
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$x=$_POST["username"];  //1' or 1=1 #
$y=$_POST["password"];

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "guanli";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM user where username='".$x."'and password='".$y."'";



$result = $conn->query($sql);//执行查询语句
if ($result->num_rows > 0) {
    echo "登录成功";
     $url="qianduan.php";
      // while($row = $result->fetch_assoc()){
      //     echo $row["title"]."<br>";
      // }
    echo"<meta http-equiv='refresh' content='1;url=$url' >";
} else {
    echo "账号或密码不对，请重新登录";
    $url="login.php";
    echo"<meta http-equiv='refresh' content='2;url=$url' >";
}
$conn->close();
?>

</body>
</html>
