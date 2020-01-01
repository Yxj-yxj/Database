
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
<div style="position:absolute;top:100px;left:300px;z-index: 3000;">
    <form action="jianqun.php" method="post">
    <table style='margin:0 auto;width:1000px;height: 100px;font-size: 30px;color: #b21f2d' border='5'>
        <tr><th style='text-align: center'>ID</th><th style='text-align: center'>备注</th><th style='text-align: center;white-space: nowrap;font-size: 20px'>拉入群聊</th></tr>
        <?php
        include "public.php";
        $UserID=$_GET["UserID"];
        echo "<br/><br/><br/>";
        $result = mysqli_query($con,"SELECT * FROM userelation");
        $datarow=mysqli_num_rows($result);
        //      echo $datarow;
        for($i=0;$i<$datarow;$i++)
        {
            $sql_arr=mysqli_fetch_assoc($result);
            if ($sql_arr["MainUserID"]==$UserID) {
                $cusID = $sql_arr["CusUserID"];
                $remark=$sql_arr["BEIZHU"];
                echo "<tr><th style='text-align: center'><a href='findfriend2.php?cusid=$cusID&mainid=$UserID'> $cusID</a></th><th style='text-align: center'>$remark</th>
                        <th><label><input type='checkbox' name='checkbox[]' value='$cusID'></label></th></tr>";

            }
        }
        echo "<label><imput type='hidden' name='UserID' value='$UserID'></label>";
        echo "<div style='position:absolute;top:50px;left:300px;z-index: 9;'>";
        echo '<label><button type="submit" class="tm-btn-subscribe">建立群聊</button></label></div>';
        ?></form>
</div>

<!--返回主页模块-->
<div style="z-index: 2000; position: fixed ! important; left: 670px; top: 650px;">
    <?php
    $mainid=$_GET["UserID"];
    echo "<a style='text-decoration: none;outline: none;color: white;border: 2px solid white' class='tm-btn-subscribe' href='person2.php?UserID=$mainid'>";
//    echo '<button type="submit" class="tm-btn-subscribe">返回好友列表页</button>';
    echo "返回好友列表页";
    echo "</a>";
    ?>
</div>

<!--注销模块-->
<div style="z-index: 1000; position: fixed ! important; left: 1300px; top: 0;">
    <?php
    $UserID=$_GET["UserID"];
    echo "<a style='text-decoration: none;outline: none;color: white;border: 2px solid white' class='tm-btn-subscribe' href='index.html'>注销";
 //   echo '<button type="submit" class="tm-btn-subscribe">注销</button>';
    echo '</a>'
    ?>
</div>
</body>
</html>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>


