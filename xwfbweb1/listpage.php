
<!-- 实现分页listpage.php -->

<!DOCTYPE html>
<html>
<head>
    <title></title>

<style type="text/css">

   #d0{background-color:pink;
      width: 1500px;
      margin-right:auto;
      margin-left:auto;}

    #d1{background-color:red;}

</style>

</head>
<body>

<div  id="d0">

     <div  id="d1">

      <img src="images/a.jpeg"  width="1500px"  height="200px">
     </div>
     <div  id="d2">

           <?php


$x= $_GET["page"];

    echo "这是第<b>".$x."</b>页新闻列表：";
//连接数据库
$conn=mysql_connect("localhost","root","root") or die("数据库服务器连接错误".mysql_error());

mysql_select_db("nwfbdb",$conn) or die("数据库访问错误".mysql_error());


mysql_query("set names utf-8");

/*  $_GET[page]为当前页，如果$_GET[page]为空，则初始化为1  */
if ($_GET["page"]=="")
{
    $_GET["page"]=1;
}


$page_size=4;                         //每页显示4条记录

$query="select count(*) as total from news  order by Id desc";

$result=mysql_query($query);                        //查询符合条件的记录总条数


$message_count=mysql_result($result,0,"total");     //要显示的总记录数

$page_count=ceil($message_count/$page_size);        //根据记录总数除以每页显示的记录数求出所分的页数


$offset=($_GET["page"]-1)*$page_size;                     //计算下一页从第几条数据开始循环

$sql=mysql_query("select * from news order by Id desc limit $offset, $page_size");

$row=mysql_fetch_object($sql);

if(!$row){
    echo "<font color='red'>暂无新闻信息!</font>";
}
do{
        echo "<p>".$row->title;

}while($row=mysql_fetch_object($sql));
?>

     </div>
     <div  id="d3">

         <?php

           /*  如果当前页不是首页  */

                            /*  显示“首页”超链接  */
                            echo  "<a href=listpage.php?page=1>首页</a>   ";
                            /*  显示“上一页”超链接  */
                            echo "<a href=listpage.php?page=".($_GET["page"]-1).">上一页</a>";

                             echo "<a href=listpage.php?page=".($_GET["page"]+1).">下一页</a>&nbsp;";

                              echo  "<a href=listpage.php?page=".$page_count.">尾页</a>";

         ?>


     </div>

</div>

</body>
</html>


