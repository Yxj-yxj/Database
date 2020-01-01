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
<!--管理员界面-->
<div style="position:absolute;top:100px;left:300px;z-index: 9999;">
    <table style='margin:0 auto;width:1000px;height: 100px;font-size: 30px;color: #b21f2d' border='5'>
        <tr><th style='text-align: center'>群ID</th><th style='text-align: center;white-space: nowrap;font-size: 20px'>群成员</th></tr>
        <?php
        include "public.php";
        echo "<br/><br/><br/>";
        $result = mysqli_query($con,"SELECT * FROM qun");
        $datarow=mysqli_num_rows($result);
        //      echo $datarow;
        for($i=0;$i<$datarow;$i++)
        {
            $sql_arr=mysqli_fetch_assoc($result);
            $UserID = $sql_arr["UserID"];
            $qunid=$sql_arr["qunid"];
            $qunmember=$sql_arr["qunmember"];
            echo "<tr><th style='text-align: center'> $qunid</th><th style='text-align: center'>$qunmember</th></tr>";
        }
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
<!--返回主页模块-->
<div style="z-index: 9999; position: fixed ! important; left: 670px; top: 650px;">
    <?php
    $mainid=$_GET["UserID"];
    echo "<a href='person2.php?UserID=$mainid'>";
    echo '<button type="submit" class="tm-btn-subscribe">返回好友列表页</button>';
    echo "</a>";
    ?>
</div>

</body>
</html>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
