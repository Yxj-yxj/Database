<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>管理员界面</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/demo.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

</head>


<body>

<div id="particles-js"></div>

<ul class="cb-slideshow">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<!--公众号管理员界面-->
<div style="position:absolute;top:100px;left:300px;z-index: 9999;">
    <table style='margin:0 auto;width:1000px;height: 100px;font-size: 30px;color: #b21f2d' border='5'>
        <tr><th style='text-align: center'>公众号ID</th><th style='text-align: center'>公众号名称</th><th style='text-align: center;white-space: nowrap;font-size: 20px'>删除公众号</th></tr>
        <?php
        include "public.php";
        echo "<br/><br/><br/>";
        $result = mysqli_query($con,"SELECT * FROM gzhinfo");
        $datarow=mysqli_num_rows($result);
        //      echo $datarow;
        for($i=0;$i<$datarow;$i++)
        {
            $sql_arr=mysqli_fetch_assoc($result);
            $GZHID = $sql_arr["GZHID"];
            $GZHname=$sql_arr["GZHname"];
            echo "<tr><th style='text-align: center'> $GZHID</th><th style='text-align: center'>$GZHname</th>
                        <th style='font-size: 20px;text-align: center;white-space: nowrap;'><a href='rootgzhdelete.php?gzhid=$GZHID'> 删除公众号</a></th></tr>";
        }
        ?>
</div>
<!--返回用户模块 -->
<div style="z-index: 9999; position: fixed ! important; left: 120px; top: 120px;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a href='root.php'>";
    echo '<button type="submit" class="tm-btn-subscribe">微信用户管理</button>';
    echo '</a>'
    ?>
</div>
<!--注销模块-->
<div style="z-index: 9999; position: fixed ! important; left: 1300px; top: 0;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a href='index.html'>";
    echo '<button type="submit" class="tm-btn-subscribe">注销</button>';
    echo '</a>'
    ?>
</div>

</body>
</html>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
