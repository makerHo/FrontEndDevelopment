<?php
//echo json_encode($_POST);
//var_dump($_POST);
//前台传过来的用户名
//echo $_POST['username'];
//前台传过来的密码
//echo $_POST['pwd'];
//sql:添加数据insert into user(字段名)values(字段名对应的值)
//链接mysql服务器，找到kong数据库
$pdo=new PDO("mysql:host=localhost;dbname=kong","root","");
$sql="insert into user(
        username,
        pwd,
        regTime
    )values(
        '".$_POST['username']."',
         '".$_POST['pwd']."',
        now()
      )";
// "adsfadfa's".$a."d'fasd"
//echo $sql;
//$pdo->query():执行sql语句
//$result=$pdo->query($sql);
//exec:执行添加数据，如果成功，返回添加成功的条数;
$result=$pdo->exec($sql);
//echo ($result);
if($result){
    echo "ok";
}else{
    echo "failed";
}














?>