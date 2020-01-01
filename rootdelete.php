<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/22
 * Time: 19:21
 */
include "public.php";
    $UserID=$_GET["userid"];
    $sql="DELETE from main_db where UserID=$UserID";
    if($result=mysqli_query($con,$sql)){
        echo "<script>alert('删除成功');location.href='root.php'</script>";
    }
    else{
        echo "<script>alert('删除失败！！请重试');location.href='root.php'</script>";
    }

