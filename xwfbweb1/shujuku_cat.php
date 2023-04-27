<!DOCTYPE html>
<html>
  <head>
    <title>旅游</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            font-family: Futura, Arial, sans-serif;
        }
        caption {
            font-size: larger;
            margin: 1em auto;
        }
        th, td {
            font-size: 12px;
            padding: .65em;
        }
        th {
            background: #555 nonerepeat scroll 0 0;
            border: 1px solid #777;
            color: #fff;
        }
        td {
            border: 1px solid#777;
        }
        th {
            background: #696969;
            color:#FFFFFF;
        }
        tbody tr:nth-child(odd) {
            background: #ccc;
        }
</style>
  </head>

  <body>

    <div class="header"><!--头部-->
    <h1>新闻发布系统</h1>
    </div>

    <div class="navbar"> <!--导航栏-->
        <a href="./shujuku.php">首页</a>
        <a href="./shujuku_fangchan.php">房产</a>
        <a href="./shujuku_tour.php">旅行</a>
        <a href="./shujuku_cat.php">汽车</a>
        <a href="./shujuku_entertainment.php">娱乐</a>
        <a href="./shujuku_fashion.php">时尚</a>
        <a href="./shujuku_technology.php">科技</a>
        <a href="./qianduan.php">更多</a>

        <a href="./login.php" class="right">登出系统</a>
    </div>

    <div class="row"><!--导航栏之下-->

        <div class="side"><!--左边栏-->
            <h1>搜索</h1><br/>
                <form action="search_cat.php" method="post">
                    查询内容：<input type="text" name="keywords" placeholder="请输入搜索内容">
                </br></br>
                    <input type="submit" values="搜索">
                </form>
        </div>

        <div class="main"><!--页面主体（右）-->

            <div align="center" style="margin-top:100px">
            <h1>汽车</h1>
                <!-- 以表格的形式进行显示 -->
                    <table style='text-align:center;' border='1'>
                <th>id</th>
                <th>标题</th>
                <th>作者</th>
                <th>来源</th>

                <th>类型</th>
                <th>时间</th>
                <th>管理员操作选项</th>

                <?php
                error_reporting(0);
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "nwfbdb";

                // 创建连接
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("连接失败: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM cat";
                $result = mysqli_query($conn, $sql);



                if (mysqli_num_rows($result) > 0) {
                    // 输出数据


                while($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" .$row["news_id"].    "</td>   <td><a href='neirong_cat.php?id={$row['news_id']}'>"  .$row["title"].     "</a></td>   <td> "  .$row["author"].   "</td>    <td>  ".$row["source"]."  </td>  <td>  ".$row["type"]."  </td> <td>  ".$row["pubtime"]."  </td>
                <td>
                    <a href='add.php?id={$row['news_id']}'><button>添加</button></a>
                    <a href='delete.php?id={$row['news_id']}'><button>删除</button></a>
                    <a href='update_cat.php?id={$row['news_id']}'><button>修改</button></a>
                    </td>
                    </tr>";


                }
                } else {
                    echo "0 结果";
                }

                mysqli_close($conn);
                ?>
                </table>

            </div>
        </div>

    </div>

    <div class="footer">
    <h5>PHP演示-第二小组</h5>
    </div>>

</body>
</html>