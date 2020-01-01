
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>用户通讯录</title>
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

<!--调取通讯录好友模块 -->
<div style="position:absolute;top:100px;left:300px;z-index: 9999;">
    <table style='margin:0 auto;width:1000px;height: 100px;font-size: 30px;color: #b21f2d' border='5'>
        <tr><th style='text-align: center'>ID</th><th style='text-align: center'>备注</th><th style='text-align: center;white-space: nowrap;font-size: 20px'>修改备注</th></tr>
        <?php
        include "public.php";
        $UserID=$_GET["UserID"];
        echo "<br/><br/><br/>";
        $result = mysqli_query($con,"SELECT * FROM userelation where `MainUserID`=$UserID");
        $datarow=mysqli_num_rows($result);
        //      echo $datarow;
        for($i=0;$i<$datarow;$i++)
        {
            $sql_arr=mysqli_fetch_assoc($result);
                $cusID = $sql_arr["CusUserID"];
                $remark=$sql_arr["BEIZHU"];
                echo "<tr><th style='text-align: center'><a href='findfriend2.php?cusid=$cusID&mainid=$UserID'> $cusID</a></th><th style='text-align: center'>$remark</th>
                        <th style='font-size: 20px;text-align: center;white-space: nowrap;'><a href='changebeizhu.php?cusid=$cusID&mainid=$UserID'>修改备注</a></th></tr>";
        }
        ?>
</div>

<!--添加好友模块 -->
<div style="z-index: 9999; position: fixed ! important; left: 300px; top: 120px;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a href='addfriend.php?id=$UserID'>";
    echo '<button type="submit" class="tm-btn-subscribe">添加好友</button>';
    echo '</a>'
    ?>
</div>
<!--关注公众号模块-->
<div style="z-index: 9999; position: fixed ! important; left: 500px; top: 120px;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a href='mygzh.php?mainid=$UserID'>";
    echo '<button type="submit" class="tm-btn-subscribe">关注公众号列表</button>';
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
<!--群聊模块-->
<div style="z-index: 9999; position: fixed ! important; left: 750px; top: 120px;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a href='qun.php?UserID=$UserID'>";
    echo '<button type="submit" class="tm-btn-subscribe">发起群聊</button>';
    echo '</a>'
    ?>
</div>

</body>
</html>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>


