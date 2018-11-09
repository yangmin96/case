<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    div, ul, li,dl,dt,dd{ margin:0; padding: 0;}
    li{ list-style: none; padding: 10px;}
    h2{ width: 300px; margin: 0 auto;}
    #bbs{border-bottom: 1px solid #ddd; font-size: 14px;}
    #bbs ul{border-top: 1px solid #ddd; padding:10px 20px;}
    #bbs ul li span{padding:10px 20px; }
    #bbs ul li input.msg{width: 400px;}
    #bbs ul li span.mid{ display:block; float:left;}
    #show dl{width: 800px; height:220px; border-top:1px solid #ccc; border-bottom:1px solid #ccc; overflow:hidden; margin:0 auto; }
    #show dt{  height: 200px; padding:40px;  float:left;}
    #show dd{ width: 600px; height: 30px; border:1px solid #ddd; margin:10px 0 0 40px; float:left; font: 14px/30px "黑体"; padding-left:10px; }
    #show dd:nth-child(3){height: 100px;}
    .img{width:20px;height:20px;margin-top:5px;}
    #show dd a{ float:right; text-decoration: none; color:#333; margin-right:20px; font-weight: bold; }
    </style>
</head>
<body>
<?php
require './common.php';
//同页提交留言
if($_POST['btn']){
    $uName = $_POST["uName"];
    $face = $_POST["face"];
    $sTitle = $_POST["sTitle"];
    $con = $_POST["con"];
    if ($uName==""  || $face=="" || $sTitle=="" || $con==""){
        echo "提交内容不能为空";
        echo "<script>window.location.href='index.php';</script>";
    }
    else{
        $sql2 = "insert into bbs(uName,face,sTitle,con,sTime) values('$uName','$face','$sTitle','$con','$sTime')";
        $m->query($sql2);
    }
   
}
    $sql = "select * from bbs order by sTime desc";
    $res = $m->query($sql);


?>
<h2>Huawei在线留言系统</h2>
<div id="bbs">
    <form action="" method="post">
    <ul>
        <li>
            <span>用户名称</span>
            <input class="msg" id="uName" type="text" name="uName" placeholder="请输入用户名">
        </li>
        <li>
            <span>用户头像</span>
            <input type="radio" name="face" checked value="1.jpg"/><img src="face/1.jpg" />
            <input type="radio" name="face"  value="2.jpg"/><img src="face/2.jpg" />
            <input type="radio" name="face" value="3.jpg"/><img src="face/3.jpg" />
            <input type="radio" name="face" value="4.jpg"/><img src="face/4.jpg" />
            <input type="radio" name="face" value="5.jpg"/><img src="face/5.jpg" />
        </li>
        <li><span>留言标题</span><input class="msg" id="title" type="text" name="sTitle" /></li>
        <li>
            <span class="mid">留言内容</span> <textarea cols="60" rows="10" name="con" id="con"></textarea>
        </li>
        <li><span></span><input type="submit" value="提交留言" name="btn" id="btn"/></li>
    </ul>
    </form>
</div>
<div id="show">
<?php
while($r=$res->fetch_assoc()){
?>
<dl>
           <dt><img src="face/<?php echo $r['face']?>" /><p><?php echo $r['uName']?></p></dt>
           <dd>标题:<?php echo $r['sTitle']?>
           <a href="del.php?id=<?php echo $r['id']?>"><img src="face/dele.jpg" class="img"/></a>
           <a href="update.php?id=<?php echo $r['id']?>"><img src="face/upd.jpg" class="img"/></a>
           </dd>
           <dd>内容: <?php echo $r['con']?></dd>
           <dd><?php echo $r['sTime']?></dd>
</dl>
<?php
    }
?>
</div>
</body>
</html>