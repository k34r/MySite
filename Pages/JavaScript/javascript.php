<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JavaScript</title>
	<link rel="stylesheet" type="text/css" href="./CSS/my.css">
</head>
<body>
	<?php require_once 'PageComponents/header.html'; ?>
<main>
	<h3>Типы данных в js</h3>
	<ol>
		<li>number</li>
		<li>string</li>
		<li>boolean</li>
		<li>null</li>
		<li>undefined</li>
		<li>object</li>
		<li>simbol</li>
		<li>bigint</li>
	</ol>
	<hr>


	Timer
	<input type="text" value="0" id="text">
	<button onclick="start()">start</button>
	<button onclick='stop()'>stop</button>

<script type="text/javascript">
	function start(){
		window.timer1 = window.setInterval(timer,1000);
	}
	function timer(){
		var timer_view = document.getElementById('text');
        timer_view.value = parseInt(timer_view.value)+1;
	}
	function stop() {
		window.clearInterval(window.timer1);
	}
</script>
<hr>

 AJAX
<input id="submit_ip_show" type="submit" value="show my ip" >
<div id="show"></div>
<script type="text/javascript">
window.onload = function(){
	document.querySelector('#submit_ip_show').onclick = function(){
		ajaxGet();
	}
}

	function ajaxGet(){
		var query = new XMLHttpRequest();

		query.onreadystatechange = function(){
			if(query.readyState == 4 && query.status == 200){
				document.getElementById('show').innerHTML = query.responseText;
			}
		}

		query.open('GET','Pages/AJAX/ip.php');
		query.send();
	}
</script>


</main>
</body>
</html>