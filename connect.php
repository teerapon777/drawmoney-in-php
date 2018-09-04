<?php
$host = "localhost";
$username = "root";
$password = "Teerapon777";
$db="with_draw";
$link = mysql_connect($host,$username,$password) or die ("ติดต่อ MySQL ไม่ได้");
mysql_db_query($db,"SET NAMES UTF8");
mysql_select_db($db) or die("เลือกข้อมูลไม่ได้");
?>
