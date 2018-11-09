<?php
header("Content-type:text/html;charset=utf-8");
require "./common.php";
$id = $_GET['id'];
$uName = $_POST["uName"];
$face = $_POST["face"];
$sTitle = $_POST["sTitle"];
$con = $_POST["con"];
$res = $m->query("update bbs set uName='$uName',face='$face',sTitle='$sTitle',con='$con',sTime='$sTime' where id='$id'");
if($res){
    echo "<script>window.location.href='show.php';</script>";
}
else{
    echo "unsuccess!";
}
?>