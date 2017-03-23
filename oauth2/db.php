<?php
$dbms='mysql';     //数据库类型
$host='127.0.0.1'; //数据库主机名
$dbName='web';    //使用的数据库
$user='web';      //数据库连接用户名
$pass='web';          //对应的密码
$dbport = '3307';  //端口
$dsn="$dbms:host=$host;port={$dbport};dbname=$dbName";
$dbh = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8")); //初始化一个PDO对象
    // print_r($dbh);
    // echo "连接成功<br/>";
    // 你还可以进行一次搜索操作
    // foreach ($dbh->query('SELECT * from user') as $row) {
    //     print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    // }


