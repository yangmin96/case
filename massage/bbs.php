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
<h2>Huawei在线留言系统</h2>
<div id="bbs">
    <form action="serve.php" method="post">
    <ul>
        <li>
            <span>用户名称</span>
            <input class="msg" type="text" name="uName" placeholder="请输入用户名">
        </li>
        <li>
            <span>用户头像</span>
            <input type="radio" name="face" checked value="1.jpg"/><img src="face/1.jpg" />
            <input type="radio" name="face"  value="2.jpg"/><img src="face/2.jpg" />
            <input type="radio" name="face" value="3.jpg"/><img src="face/3.jpg" />
            <input type="radio" name="face" value="4.jpg"/><img src="face/4.jpg" />
            <input type="radio" name="face" value="5.jpg"/><img src="face/5.jpg" />
        </li>
        <li><span>留言标题</span><input class="msg" type="text" name="sTitle" /></li>
        <li>
            <span class="mid">留言内容</span> <textarea cols="60" rows="10" name="con"></textarea>
        </li>
        <li><span></span><input type="submit" value="提交留言" /></li>
    </ul>
    </form>
</div>
</body>
</html>