<!DOCTYPE HTML>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="keywords" content="scclui框架">
	<meta name="description" content="scclui为轻量级的网站后台管理系统模版。">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-siteapp" />
  <title>首页</title>
 </head>
  <body>
  	<br><br><center><font color=green size=3><b>商 品 评 论</b></font></center><br>
		<table cellspacing=0 bordercolordark=#FFFFFF width="80%" bordercolorlight=#000000 border=1 align="center" cellpadding="2">
		<tr bgcolor="#6b8ba8" style="color:FFFFFF">
		    <td width="5%" align="center" valign="bottom" height="19">商品编号</td>
		    <td width="20%" align="center" valign="bottom">商品名称</td>
		    <td width="35%" align="center" valign="bottom">商品评论</td>
		    <td width="10%" align="center" valign="bottom">商品热度</td>
		    <td width="15%" align="center" valign="bottom">评论时间</td>
		    <td width="15%" align="center" valign="bottom">操作</td>
		</tr>
		<?php
			date_default_timezone_set("PRC");
			require('1_init.php');
			$sql = "SELECT * FROM list_goods";
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['pro_name'];?></td>
			<td><?php echo $row['pro_comment'];?></td>
			<td><?php echo $row['pro_hot'];?></td>
			<td><?php echo $row['pro_addtime']?></td>
			<td>
				<a href='comment_delete.php?id=<?php echo $row['id'];?>');\">删除</a>
				<a href='comment_update.php?id=<?php echo $row['id'];?>');\">修改</a>
			</td>
		</tr>
		<?php    
			}
		?>
		</table>
  </body>
</html>
