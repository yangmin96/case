<?php
header("Content-type:text/html;charset=utf-8");
$m = new mysqli("localhost","root","root","one");
$res = $m->query("select * from slep");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2";>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>年龄</td>
            </tr>
        <?php
            while($row=$res->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['age'] ?></td>
            </tr>
        <?php  
        }
        ?>
    </table>
</body>
</html>
