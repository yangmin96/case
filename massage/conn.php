<?php
//mysqli有四个参数(服务器ip,用户名,密码,数据库名)
$m = new mysqli("localhost","root","root","one");
$res = $m->query("select * from slep");
while($r=$res->fetch_assoc()){
    echo '<pre>' ;
        print_r($r);
    echo '</pre>';
}

//fetch_assoc:获取关联数组
//fetch_row:获取索引数组
//fetch_array:获取关联和索引数组(不推荐)
?>