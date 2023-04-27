<html>
<head>
    <meta charset="utf-8" />
    <title>后台主页</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<table  class="table table-hover"  border="1"  width="1000"  >
    <tr> <td>序号</td>       <td>标题</td>   <td>作者</td>    <td>来源</td>  <td>操作</td>      </tr>
   <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "news";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM news";
$result = $conn->query($sql);   //执行查询

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" .$row["Id"].    "</td>   <td>"  .$row["title"].     "</td>   <td> "  .$row["author"].   "</td>    <td>  ".$row["source"]."  </td> <td>  ".$row["content"]."  </td> <td>  ".$row["type"]."  </td> <td>  ".$row["pubtime"]."  </td> <td>编辑 删除</td>    </tr>" . $row["Id"];
    }
} else {
    echo "0 结果";
}
$conn->close();
?>




</body>

</html>





<!-- //    while($row = mysqli_fetch_assoc($result)) {
 //     //     echo "<tr> <td>" .$row["Id"].    "</td>   <td>"  .$row["title"].     "</td>   <td> "  .$row["author"].   "</td>    <td>  ".$row["source"]."  </td>  <td>编辑 删除</td>    </tr>" . $row["Id"];
 //     // }

 //     echo '<tr><td>' . $row['title'] . '</td></tr>';
 //     echo '<tr><td>' . $row['author'] . '</td></tr>';
 //     echo '<tr><td>' . $row['source'] . '</td></tr>';
 //     echo '<tr><td>' . $row['content'] . '</td></tr>';
 //     echo '<tr><td>' . $row['pubtime'] . '</td></tr>';
 //     echo '<tr><td>' . $row['type'] . '</td></tr>';

 // } -->