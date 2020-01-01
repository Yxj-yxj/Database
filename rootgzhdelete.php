<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/22
 * Time: 19:21
 */
include "public.php";
$gzhid=$_GET["gzhid"];
$sql="DELETE from gzhinfo where GZHID=$gzhid";
if($result=mysqli_query($con,$sql)){
    echo "<script>alert('删除成功');location.href='rootgzh.php'</script>";
}
else{
    echo "<script>alert('删除失败！！请重试');location.href='rootgzh.php'</script>";
}

