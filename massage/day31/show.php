<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div,dl,dt,dd{margin: 0; padding: 0;}
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
require "./common.php";
$res = $m->query("select * from bbs order by sTime desc");
?>
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