<?php
    @$id = $_GET['id'];


    $link = mysqli_connect('localhost','root','root','nwfbdb');
    if(!$link){
        exit('mysql link fail');
    }
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'cat');

    $sql = "select * from cat where news_id='${id}'";
    $query = mysqli_query($link,$sql);
     $res =mysqli_fetch_assoc($query);


?>
<html>
    <head>
        <meta charset='utf-8' />
        <title>修改</title>
    </head>
    <body>
        <form action='doupdate_cat.php' >
<h1 align="center">新闻内容页</h1>
<div style="text-align:center;vertical-align:middel;">
            <label>标题:</label>
            <input type='text' name='title' style="height:10%;width:20%" value='<?php echo $res['title'] ?>'><br/>
            <label>作者:</label>
            <input type='text' name='author' style="height:10%;width:20%" value='<?php echo $res['author'] ?>'><br/>
            <label>来源:</label>
            <input type='text' name='source' style="height:10%;width:20%" value='<?php echo $res['source'] ?>'><br/>
            <label>内容:</label>
            <textarea type='text' name='content' style="height:20%;width:20%"  value=''><?php echo $res['content'] ?></textarea><br/>
            <label>时间:</label>
            <input type='Datetime' name='pubtime' style="height:10%;width:20%" value='<?php echo $res['pubtime'] ?>'><br/>
            <label>类型:</label>
            <input type='text' name='type' style="height:10%;width:20%" value='<?php echo $res['type'] ?>'><br/>
             <input type="hidden" name='id' value='<?php echo $res['news_id'] ?>'> <br/>
            <!-- <input type='submit' value='提交修改'> -->
            </div>
        </form>



    </body>
</html>


