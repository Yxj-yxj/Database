<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/21
 * Time: 11:17
 */
include "public.php";
    $mainid=$_REQUEST["mainid"];
    $cusid=$_REQUEST["cusid"];
    $beizhu=$_REQUEST["beizhu"];
    $sql="UPDATE userelation set beizhu = '$beizhu' where MainUserID=$mainid and CusUserID=$cusid";
    if($result=mysqli_query($con,$sql)){
        echo "<script>alert('修改成功');location.href='person2.php?UserID=$mainid'</script>";
    }
    else{
        echo "<script>alert('修改失败！！');location.href='person2.php?UserID=$mainid'</script>";
    }
