<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/20
 * Time: 16:58
 */
include "public.php";
$gzhid=$_REQUEST["gzhid"];
$Mainid=$_REQUEST["mainid"];
$sql="INSERT INTO gzhrelation values ('$Mainid','$gzhid')";
if($result=mysqli_query($con,$sql)){
    echo "<script>alert('添加成功');location.href='mygzh.php?mainid=$Mainid'</script>";
}else{
    echo "<script>alert('添加失败，请检查ID是否正确');location.href='mygzh.php?mainid=$Mainid'</script>";
}
?>