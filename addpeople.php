<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/20
 * Time: 16:58
 */
include "public.php";
    $id=$_REQUEST["id"];
    $Mainid=$_REQUEST["selfid"];
    echo $Mainid;
    $testsql="select * from main_db where UserID=$id";
$result=mysqli_query($con,$testsql);
    if (mysqli_num_rows($result)!=0) {

        $sql = "INSERT INTO userelation values ('$Mainid','$id','')";
        if ($result = mysqli_query($con, $sql)) {
            echo "<script>alert('添加成功');location.href='person2.php?UserID=$Mainid'</script>";
        } else {
            echo "<script>alert('添加失败，他已经是您的好友');location.href='addfriend.php?id=$Mainid'</script>";
        }
    }
    else{
        echo "<script>alert('添加失败，没有这个ID的微信用户');location.href='addfriend.php?id=$Mainid'</script>";
    }
    ?>