<?php
$pdo=new PDO("mysql:host=localhost;dbname=kong","root","");
//设置字符集
$pdo->query("set names utf8");
//"adfadfad'sf".$a."a'sdf"
$sql="select * from search where cname like '%".$_POST['keywords']."%'";
//echo $sql;
//执行sql语句，返回值是结果集
$result=$pdo->query($sql);
//从结果集中取出数据，
$data=$result->fetchAll(PDO::FETCH_OBJ);
echo json_encode($data);
//var_dump($data);
?>