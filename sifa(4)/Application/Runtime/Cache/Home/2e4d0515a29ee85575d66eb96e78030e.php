<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style>
		#con{
			width:90%;height:100%;margin:auto;
			font-size:18px;margin-top:100px;
		}
	</style>
	<script>
	var r=confirm("是否上传鉴定情况图片？"); 
	if (r==true) {
		var con=document.getElementById("con");
		//con.style.display="block";
	}else{
		window.location.href="/sifa(4)/index.php?s=/Home/Jbxx/jbxxiframe3";
	}
	</script>
</head>
<body>
	<div id="con">
		<form action="/sifa(4)/index.php?s=/Home/Jbxx/uppic" enctype="multipart/form-data" method="post">
			<h4><input type="file" name="upload" style="border:none; outline:none;width:300px;background:none;height:40px;"/></h4>
			<input type="submit" value="上传" style="height:35px;font-size:22px;color:#000;"/><br/><br/>
		</form>
	</div>	
</body>

</html>