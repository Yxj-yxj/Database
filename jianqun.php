<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/22
 * Time: 20:19
 */
include "public.php";
    $value=$_POST["checkbox"];
    $UserID=$_REQUEST["UserID"];
    $people=implode(",",$value);
    $sql="insert into qun values ('','','$people')";
    if($result=mysqli_query($con,$sql)){
        echo "<script>alert('建群成功');location.href='displayqun.php?UserID=$UserID'</script>";
    }
    else{
        echo "<script>alert('建群失败');history.back()</script>";
}