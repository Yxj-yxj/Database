<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/21
 * Time: 13:44
 */
include "public.php";
    $mainid=$_GET["mainid"];
    $gzhid=$_GET["gzhid"];
    $sql="delete from gzhrelation where MainUserID=$mainid and GzhID=$gzhid";
    if($result=mysqli_query($con,$sql)){
        echo "<script>alert('取关成功');location.href='mygzh.php?mainid=$mainid'</script>";
    }
    else{
        echo "<script>alert('取关失败！！请重试');location.href='mygzh.php?mainid=$mainid'</script>";
    }