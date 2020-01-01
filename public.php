<?php
$con = mysqli_connect("localhost","root","123456");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"weixin");
mysqli_set_charset($con, "utf8");
?>