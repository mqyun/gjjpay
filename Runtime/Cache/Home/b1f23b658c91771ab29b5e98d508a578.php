<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="<?php echo U(add);?>" method="post">
		<input type="text" name="level" placeholder="级别">	<br>
		<input type="text" name="duration" placeholder="持续时间"><br>	
		<input type="text" name="area" placeholder="地区">	<br>
		<input type="text" name="name" placeholder="名称"><br>
		<select name="select">
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type"]); ?>" ><?php echo ($vo["type"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>灾害类型
		<input type="submit" value="提交">
	</form>
</body>
</html>