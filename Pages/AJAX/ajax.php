<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ajax</title>
	<link rel="stylesheet" type="text/css" href="./CSS/my.css">
</head>
<body>
<?php require_once './PageComponents/header.html'; ?>
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
</body>
</html>