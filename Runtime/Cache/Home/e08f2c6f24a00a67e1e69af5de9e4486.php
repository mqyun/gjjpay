<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<title>地图</title>
	<!-- <link rel="stylesheet" href="honglao.css"> -->
	<script src="jquery-2.1.1.min.js" type="text/javascript"></script>
	<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=6U5BZ-AT3HW-NZWRH-RCE5X-MVXW3-3MFFA&libraries=drawing,geometry,autocomplete,convertor"></script>
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


		 
		var center = new qq.maps.LatLng(position.coords.latitude,position.coords.longitude);
		var map = new qq.maps.Map(document.getElementById('container'),{
			center: center,
			zoom: 14
		});

		//获取数据	
		var data = <?php echo ($str); ?>;
		var dataObj=eval(data);

		//添加信息窗口
		var infoWin = new qq.maps.InfoWindow({
			map: map
		});
		for(var i = 0;i < dataObj.length; i++) {
			(function(n){
				var marker = new qq.maps.Marker({
					position: new qq.maps.LatLng(Number(dataObj[n].Latitude),Number(dataObj[n].Longitude)),
					map: map
				});
				qq.maps.event.addListener(marker, 'click', function() {
					infoWin.open();
					infoWin.setContent('<div style="text-align:center;white-space:'+
						'nowrap;margin:10px;">' +
						dataObj[n].content+ '</div>');
					infoWin.setPosition(new qq.maps.LatLng(Number(dataObj[n].Latitude),Number(dataObj[n].Longitude)));
				});
			})(i);
		}

		

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
       <style>
       	html,body{
       		width:100%;
       		height:100%;
       	}
       	*{
       		margin:0px;
       		padding:0px;
       	}
       	body, button, input, select, textarea {
       		font: 12px/16px Verdana, Helvetica, Arial, sans-serif;
       	}
       	p{
       		width:603px;
       		padding-top:3px;
       		overflow:hidden;
       	}
       	.btn{
       		width:142px;
       	}
       	#container{
       		min-width:600px;
       		min-height:767px;
       	}
       </style>
   </head>
   <body >	
   	<div id="container">

   	</div>

   </body>
   </html>