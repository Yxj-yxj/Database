<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/21
 * Time: 10:47
 */
    include "public.php";
    $mainid=$_GET["mainid"];
    $cusid=$_GET["cusid"];
    $sql="delete from userelation where MainUserID=$mainid and CusUserID=$cusid";
    if($result=mysqli_query($con,$sql)){
        echo "<script>alert('删除成功');location.href='person2.php?UserID=$mainid'</script>";
    }
    else{
        echo "<script>alert('删除失败，请重新操作');location.href='person2.php?UserID=$mainid'</script>";
    }
    ?>
