<?php
sleep(2);
$pdo=new PDO("mysql:host=localhost;dbname=kong","root","");
$pdo->query("set names utf8");
$query=$pdo->query("select * from user");
$sql="select * from user ";
$result=$pdo->query($sql);
echo json_encode($result->fetchAll());
?>