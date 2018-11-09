<?php
header("Content-type:text/html;charset=utf-8");
$m = new mysqli("localhost","root","root","one");
$res = $m->query("select * from slep");
while($row=$res->fetch_assoc()){
    echo $row["id"]."".$row["name"]."".$row["age"]."</br>";
    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';
}
?>