<?php
//$db = new MySQLi("localhost","root","root","gift");
//!mysqli_connect_error() or die("连接失败！");
require('conn.php');
$id = $_GET["id"];

$sql = "delete from feedback where fid ='{$id}'";
$r = $db->query($sql);
if($r)
{
  header("location:feedback.php");
}
else
{
  echo "删除失败！";
}
?>