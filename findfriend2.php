<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>好友详细信息</title>
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

    <!--好友信息列表-->
    <div style="position:absolute;top:100px;left:300px;z-index: 9999;">
    <table style='white-space: nowrap;margin:0 auto;text-align:center;width:1000px;height: 100px;font-size: 30px;color: #fefefe;' border='1'
    <?php
    /**
     * Created by PhpStorm.
     * User: 10696
     * Date: 2018/12/18
     * Time: 17:09
     */

    $id=$_GET["cusid"];
    include "public.php";
    $result = mysqli_query($con,"SELECT * FROM main_db");
    $datanum=mysqli_num_rows($result);
    for ($i=0;$i<$datanum;$i++){
        $person=mysqli_fetch_assoc($result);
        if($person["UserID"]==$id) {
            $phone = $person["Phone"];
            $district = $person["District"];
            $sex = $person["Sex"];
            $name = $person["Name"];
            $remark = $person["Remark"];
            echo "<tr><th style='text-align: center'>ID</th><th style='text-align: center'>$id</th></tr>";
            echo "<tr><th style='text-align: center'>昵称</th><th style='text-align: center'>$name</th></tr>";
            echo "<tr><th style='text-align: center'>地区</th><th style='text-align: center'>$district</th></tr>";
            echo "<tr><th style='text-align: center'>电话</th><th style='text-align: center'>$phone</th></tr>";
            echo "<tr><th style='text-align: center'>性别</th><th style='text-align: center'>$sex</th></tr>";
        }
    }
    ?>
    </div>

    <!--删除好友-->
    <div>
        <?php
            $cusid=$_GET["cusid"];
            $mainid=$_GET["mainid"];
            echo "<a href='delete.php?mainid=$mainid&cusid=$cusid'>";
            echo '<button type="submit" class="tm-btn-subscribe">删除好友</button>';
            echo "</a>";
        ?>
    </div>
    <!--返回主页模块-->
    <div style="z-index: 9999; position: fixed ! important; left: 670px; top: 650px;">
        <?php
        $mainid=$_GET["mainid"];
            echo "<a href='person2.php?UserID=$mainid'>";
        echo '<button type="submit" class="tm-btn-subscribe">返回好友列表页</button>';
        echo "</a>";
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


