<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>添加数据</title>
    </head>
    <body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "nwfbdb";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

     @$id = $_POST['id'];
     @$bt = $_POST['bt'];
     @$zz = $_POST['zz'];
     @$ly = $_POST['ly'];
     @$nr = $_POST['nr'];
     @$lx = $_POST['lx'];
     @$fbsj = $_POST['fbsj'];
$sql = "INSERT INTO news (news_id,title,author,source,content,pubtime,type)
VALUES ('$aid','$bt','$zz','$ly','$nr','$fbsj','$lx')";

if ($conn->query($sql) === TRUE) {

   echo '添加成功<br/>';
        echo '<a href="shujuku.php">返回查看</a>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    </body>
</html>
