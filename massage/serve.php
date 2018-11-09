<?php
header("Content-type:text/html;charset=utf-8");
require "./common.php";//像css外链一样放在上边
//接收用户数据
   $uName=$_POST["uName"];
   $face=$_POST["face"];
   $sTitle=$_POST["sTitle"];
   $con=$_POST["con"];
//写入数据

$res = $m->query("insert into bbs(uName,face,sTitle,con,sTime) values('$uName','$face','$sTitle','$con','$sTime')");
if($res){
    echo "<script>window.location.href='show.php';</script>";
}
else{
    echo "unsuccess!";
}
?>