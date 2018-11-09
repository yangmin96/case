<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    div, ul, li{ margin:0; padding: 0;}
    li{ list-style: none; padding: 10px;}
    h2{ width: 300px; margin: 0 auto;}
    #bbs{border-bottom: 1px solid #ddd; font-size: 14px;}
    #bbs ul{border-top: 1px solid #ddd; padding:10px 20px;}
    #bbs ul li span{padding:10px 20px; }
    #bbs ul li input.msg{width: 400px;}
    #bbs ul li span.mid{ display:block; float:left;}
    </style>
</head>
<body>
<?php 
require "common.php";
$id = $_GET['id'];
$res = $m->query("select * from bbs where id='$id'");
$r = $res->fetch_assoc();
//获取图片的文件名
$pic = explode('.',$r['face'])[0];
?>
<h2>Huawei修改留言系统</h2>
<div id="bbs">
    <form action="gengxin.php?id=<?php echo $id ?>" method="post">
    <ul>
        <li>
            <span>用户名称</span>
            <input class="msg" type="text" name="uName" value="<?php echo $r['uName'] ?>" placeholder="请输入用户名">
        </li>
        <li>
            <span>用户头像</span>
            <?php
                for($i=1; $i<6; $i++){
                    if($i == $pic){        
            ?>
                <input type="radio" name="face" checked value="<?php echo $i ?>.jpg"/><img src="face/<?php echo $i ?>.jpg" />
           <?php

           }else{
           ?>
           <input type="radio" name="face" value="<?php echo $i ?>.jpg"/><img src="face/<?php echo $i ?>.jpg" />
           <?php
                }
            }
           ?>
        </li>
        <li><span>留言标题</span><input class="msg" type="text" value="<?php echo $r['sTitle'] ?>" name="sTitle" /></li>
        <li>
            <span class="mid">留言内容</span> <textarea cols="60" rows="10"  name="con"><?php echo $r['con'] ?></textarea>
        </li>
        <li><span></span><input type="submit" value="提交留言" /></li>
    </ul>
    </form>
</div>
</body>
</html>