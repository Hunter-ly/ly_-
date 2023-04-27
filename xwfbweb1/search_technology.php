<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
<!-- <form action="14.php" method="post">
  请输入关键字：<input type="text" name="keyword">
  <input type="submit" value="提交" />
</form> -->
<?php
  if(!empty($_POST['keywords'])){
    $keywords = $_POST['keywords'];//获取输入的关键字
    //进行数据库连接
    $conn = mysql_connect("localhost","root","root");
    if(!$conn){
      die("数据库连接失败");
    }
    $flag = mysql_select_db("nwfbdb",$conn);
    if(!$flag){
      die("数据库打开失败");
    }
    mysql_query("set names utf8");
    $sql = "select * from technology where title like '%$keywords%' or author like '%$keywords%' ";
    $result = mysql_query($sql,$conn);
    while( $row = mysql_fetch_assoc($result)){



?>
<div style="width:300px;height:100px;background-color: #ccc;margin-bottom: 10px">
  <p>标题：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['title'])?></p>
  <p>作者：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['author'])?></p><br/>
  <p>来源：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['source'])?></p><br/>
  <p>内容：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['content'])?></p><br/>
  <p>发布时间：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['pubtime'])?></p><br/>
  <p>类型：<?php echo str_ireplace($keywords, "<font color='#f00'>$keywords</font>",$row['type'])?></p><br/>
</div>
<?php
}
}else{
  echo "很遗憾，没有找到相关新闻！";
}
?>
</body>
</html>
