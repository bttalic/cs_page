<?php

$fp = fopen('C:\\wamp\\www\\cs_page\\js\\user.js', 'w');
$script=$_POST['script'];
fwrite($fp, "function add(){ return ".$script."; }");
fclose($fp);
?>

<html>
	<head>
	<script src="js/user.js"></script>
	</head>
	<body onload="add()">
		<div id="result">
		</div>
	</body>
</html>