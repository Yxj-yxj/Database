<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/19
 * Time: 17:19
 */
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $NikeName=$_REQUEST["Name"];
    $district=$_REQUEST["district"];
    $sex=$_REQUEST["sex"];
    $phone=$_REQUEST["phone"];
    if($sex=='男'||$sex=='女') {
        echo $uname;
        include "public.php";
        $result = mysqli_query($con, "insert into main_db values('$uname','$phone','$sex','$district','$NikeName','$pass')");
        if ($result) {
            echo "<script>alert('注册成功');location.href='index.html'</script>";
        } else {
            echo "<script>alert('注册失败,微信号已存在,请重新注册');location.href='zhuce.html'</script>";
        }
    }
    else
        echo "<script>alert('注册失败,性别请填写男或女');location.href='zhuce.html'</script>";
    ?>