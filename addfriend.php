﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Letter - Simple Sign Up Form</title>
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

    <!--微信号输入界面-->
    <div class="container-fluid">
        <div class="row cb-slideshow-text-container ">
            <div class="tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section">
                <header class="mb-5"><h1>添加好友</h1></header>
                <P class="mb-5">输入好友微信号以添加好友</P>

                <form method="post" class="subscribe-form">
                    <div class="row form-section">

                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <input name="id" type="text" class="form-control" id="id" placeholder="要添加的用户ID" />
                            <?php
                                $UserID=$_GET["id"];
                                echo "<input name='selfid' type='hidden' value='$UserID'>"
                            ?>
                        </div>
                        <br><br>
                        <div class="col-md-5 col-sm-5 col-xs-5">

                        </div>
                        <br><br>

                        <div>
                            &nbsp;&nbsp; <button type="submit" class="tm-btn-subscribe" formaction="addpeople.php">请求添加为好友</button>
                        </div>

                    </div>
                </form>



            </div>
        </div>
        <div class="footer-link">
            <p><a href="http://www.njtu.edu.cn/">北京交通大学</a></p>
            <p>地址：北京市海淀区上园村3号北京交通大学</p>
            <p>邮编：100044</p>
        </div>
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


