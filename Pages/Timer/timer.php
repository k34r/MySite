<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>timer</title>
	<link rel="stylesheet" type="text/css" href="CSS/css/bootstrap.min.css">
</head>
<body>
<?php require_once 'PageComponents/header.html'; ?>

	<input type="text" value="0" id="text">
	<button onclick="start()">start</button>
	<button onclick='stop()'>stop</button>
<script type="text/javascript">
	function start(){
		window.timerId = window.setInterval(timer,1000);
	}
	function timer(){
		var timer_window = document.getElementById('text');
        timer_window.value = parseInt(timer_window.value)+1;   
	}
	function stop() {
		window.clearInterval(window.timerId);
	}
</script>
</body>
</html>