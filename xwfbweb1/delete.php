<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
    $id = $_GET['id'];
    $link = mysqli_connect('localhost','root','root','nwfbdb');
    if(!$link){
        exit('mysql link fail');
    }
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'news');
    $sql = "DELETE FROM news WHERE news_id= '{$id}'";
    $res = mysqli_query($link,$sql);

    if($res){
        echo '删除成功<br/>';
        echo '<a href="shujuku.php">返回</a>';
    }else{
        echo '删除失败';
    }

?>
</body>
</html>