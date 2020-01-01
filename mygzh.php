<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>关注的公众号列表</title>
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
<!-- 公众号信息 -->
<div style="position:absolute;top:100px;left:300px;z-index: 9999;">
    <table style='margin:0 auto;width:1000px;height: 100px;font-size: 30px' border='1'>
        <tr><th style='text-align: center'>公众号名称</th><th style='text-align: center;white-space: nowrap;font-size: 20px'>取消关注</th></tr>
        <?php
        include "public.php";
        $UserID=$_GET["mainid"];
        echo "<br/><br/><br/>";
        // 选出所有的公众号id号
        $result = mysqli_query($con,"SELECT * from gzhrelation");
        $datarow=mysqli_num_rows($result);
        //      echo $datarow;
        for($i=0;$i<$datarow;$i++)
        {
            $sql_arr=mysqli_fetch_assoc($result);
            if ($sql_arr["MainUserID"]==$UserID) {
                $gzhid=$sql_arr["GzhID"];
                $sql="select GZHname FROM gzhinfo where GZHID='$gzhid'";
                $result2=mysqli_query($con,$sql);
                $gzhinfo=mysqli_fetch_assoc($result2);
                $gzhname=$gzhinfo["GZHname"];
                echo "<tr><th style='text-align: center'>$gzhname</th><th style='text-align: center;font-size: 15px;white-space: nowrap'><a href='defocus.php?gzhid=$gzhid&mainid=$UserID'>取消关注</a></th> </tr>";
            }
        }
        ?>
</div>

<!-- 关注公众号-->
<div style="z-index: 9999; position: fixed ! important; left: 300px; top: 120px;">
    <?php
    $UserID=$_GET["mainid"];
    echo "<a href='focus.php?mainid=$UserID'>";
    echo '<button type="submit" class="tm-btn-subscribe">关注公众号</button>';
    echo '</a>'
    ?>
</div>
<!-- 返回好友列表 -->
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


