<?php
    @$id = $_GET['id'];
    $link = mysqli_connect('localhost','root','root','nwfbdb');
    if(!$link){
        exit('mysql link fail');
    }
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'fashion');
    $sql = "select * from fashion where news_id='${id}'";
    $query = mysqli_query($link,$sql);
     $res =mysqli_fetch_assoc($query);


?>
<html>
    <head>
        <meta charset='utf-8' />
        <title>修改</title>
    </head>
    <body>
        <form action='doupdate_fashion.php' >


            <label>标题:</label>
            <input type='text' name='title' value='<?php echo $res['title'] ?>'><br/>
            <label>作者:</label>
            <input type='text' name='author' value='<?php echo $res['author'] ?>'><br/>
            <label>来源:</label>
            <input type='text' name='source' value='<?php echo $res['source'] ?>'><br/>
            <label>内容:</label>
            <input type='text' name='content' value='<?php echo $res['content'] ?>'><br/>
            <label>发行时间:</label>
            <input type='Datetime' name='pubtime' value='<?php echo $res['pubtime'] ?>'><br/>
            <label>类型:</label>
            <input type='text' name='type' value='<?php echo $res['type'] ?>'><br/>
             <input type="hidden" name='id' value='<?php echo $res['news_id'] ?>'> <br/>
            <input type='submit' value='提交修改'>
        </form>



    </body>
</html>

