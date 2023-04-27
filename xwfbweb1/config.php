<?php
    @$conn=mysqli_connect("localhost","root","root");
    if(!$conn){
        echo "连接数据库失败！";
    }else{
mysql_select_db("nwfbdb",$conn);

        mysql_query("set names utf8",$conn);
}
