<?php
/**
 * Created by PhpStorm.
 * User: 10696
 * Date: 2018/12/18
 * Time: 14:26
 */
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    include "public.php";

    $result = mysqli_query($con,"SELECT * FROM main_db where UserID='$uname'");
if ($uname=='root'&&$pass=='123'){
    echo "<script>alert('登陆成功,欢迎您，尊贵的管理员');location.href='root.php'</script>";
}
    while($row = mysqli_fetch_array($result))
    {

        if($row["UserID"]==$uname&&$row["Password"]==$pass){
            echo "<script>alert('登陆成功');location.href='person2.php?UserID=$uname'</script>";
        }
        else{
            echo "<script>alert('登陆失败');location.href='index.html'</script>";
        }
    }

    mysqli_close($con);
?>