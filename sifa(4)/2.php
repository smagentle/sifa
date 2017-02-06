<?php
	echo $_POST[name]."<br><br>";
	echo $_POST[sex];
?>
<html>
	<head>
	<script>
	function abc(){
document.getElementById('a1').value = document.getElementById('a').innerText;
document.getElementById('b1').value = document.getElementById('b').innerText;
document.getElementById('c1').value = document.getElementById('c').innerText;
	}
	</script>
	</head>
	<body>
	<form action="2.php" method="post">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span contenteditable="true" id="a" onblur="abc()"></span><input type="hidden" id="a1" name="name" value="" /><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span contenteditable="true" id="b" onblur="abc()"></span><input type="hidden" id="b1" name="sex" value="" /><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span contenteditable="true" id="c" onblur="abc()"></span><input type="hidden" id="c1" name="nation" value="" /><br><br>
	<input type="submit" value="Ìá½»">
	</form>
	</body>
</html>