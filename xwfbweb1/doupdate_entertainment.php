<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php
    @$id = $_GET['id'];
    $link = mysqli_connect('localhost','root','root','nwfbdb');
    if(!$link){
        exit('mysql link fail');
    }
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'entertainment');
    $sql = "update entertainment set title='{$_GET['title']}',author='{$_GET['author']}',
    source='{$_GET['source']}',content='{$_GET['content']}',pubtime='{$_GET['pubtime']}',type='{$_GET['type']}' where news_id='{$id}'";
    $query = mysqli_query($link,$sql);
    if($query){
        echo '修改成功<br/>';
        echo '<a href="shujuku_entertainment.php">返回查看</a>';
    }else{
        echo '修改失败';
    }

//news_id='{$_GET['id']}',

?>

</body>
</html>