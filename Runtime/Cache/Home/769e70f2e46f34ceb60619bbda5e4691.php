<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>Student Login Form Flat Responsive widget :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> 
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script>
	<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="Public/Home/css/indexstyle.css" rel='stylesheet' type='text/css' media="all"/>
</head>
<body>
<script>

   function getLocation(){
     var options={
       enableHighAccuracy:true, 
       maximumAge:1000
     }
     if(navigator.geolocation){
                   //浏览器支持geolocation
                   navigator.geolocation.getCurrentPosition(onSuccess,onError,options);
                   
                 }else{
                   //浏览器不支持geolocation
                 }
               }

           //成功时
           function onSuccess(position){
               //返回用户位置
               //经度
               var longitude =position.coords.longitude;
               //纬度
               var latitude = position.coords.latitude;
               
               var jingdukuang=document.getElementById("jingdu");

               jingdukuang.value=position.coords.longitude;

               var weidukuang=document.getElementById("weidu");

               weidukuang.value=position.coords.latitude;  

             }


           //失败时
           function onError(error){
             switch(error.code){
               case 1:
               alert("位置服务被拒绝");
               break;

               case 2:
               alert("暂时获取不到位置信息");
               break;

               case 3:
               alert("获取信息超时");
               break;

               case 4:
               alert("未知错误");
               break;
             }

           }
            window.onload=getLocation;
         </script>
	<div class="content">
		
			
			<form action="<?php echo U('index/add');?>" method="post" enctype="multipart/form-data">
			<div class="row1">
			<h1>基于GIS大数据的城市内涝灾情信息上报平台</h1>
				<textarea name="content" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入相关洪涝的信息';}"></textarea>
				<!--<input type="password" name="psw" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">-->
				<input  type="hidden" name="Latitude" placeholder="纬度" id="weidu">
				<input	type="hidden" name="Longitude" placeholder="经度" id="jingdu">
			
		</div>
		<div class="row2">
			<a href="">
			<input type="file" name="img[]" value=""multiple="multiple" />选择图片
			</a>
			<input type="submit" value="提交">
		</div>
	</div>
	</form>
	<div class="footer">
		<p>Copyright © 2016 BoliQ. All Rights Reserved. 玻璃球工作室 版权所有</p>
	</div>
</body>
</html>