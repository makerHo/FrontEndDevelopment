<?php
include 'Ajax_Page.class.php';
//代码延缓3秒
//sleep(3);
//host主机名；dbname：数据库名,root访问mysql服务器的用户名
//"":访问mysql服务器的密码
//PDO(数据源名称，用户名，密码);
$pdo=new PDO("mysql:host=localhost;dbname=kong","root","");
//在数据库中执行查询，返回结果集
//这儿执行sql是为了获取总记录数
$result=$pdo->query("select * from user");
//总记录数;
//实例化分页类
$page=new Ajax_Page($result->rowCount(),5,4);
//从结果集中获取所有的数据,
//PDO::FETCH_OBJ:数据以对象的形式返回;
//fetchAll:一次获取所有的数据
//echo $page->limit;
$result2=$pdo->query("select * from user ".$page->limit);
$data=$result2->fetchAll(PDO::FETCH_OBJ);
//把结果编码为json格式
//把多条数据存在数组中。
$temp=[];
$temp[0]=$data;
$temp[1]=$page->display();
echo (json_encode($temp));
//echo json_encode($data);
//echo $page->display();
//var_dump($data);
?>
