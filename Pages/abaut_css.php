<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSS</title>
	<link type='text/css' rel="stylesheet" href="./CSS/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./CSS/my.css">
</head>
<body>
<?php
require_once 'PageComponents/header.html';
?>
<style> h1{font-size: 32px; text-align: center}
 		h2{font-size: 20px; text-align: center}
		.item1{width:30px; height: 40px; background-color: #9e9}
		.item2{width:40px; height: 50px; background-color: #ee9}
		.item3{width:25px; height: 30px; background-color: #e99}

</style>
<div style="margin-left: 30px">

<h1>flexbox</h1><br>

display может принимать значения flex; inline-flex; block

<h2>flex-wrap: wrap</h2>
По умолчанию гибкие элементы будут пытаться уместиться на одной строке. Вы можете изменить это, и позволить элементам переходить на новую строку по мере необходимости с помощью этого свойства.<br><br>

<div style="width: 200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 150px; background-color: #ddd;   display: flex; flex-wrap: wrap; ">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		display: flex<br>
		flex-wrap: wrap
</div>

<h2>justify-content</h2>

<div style="display: flex; justify-content: space-around">

<div style="width:200px; height: 200px; background-color: #eef">
	<div style="display: flex; justify-content:flex-start; width: 200px; height: 150px; background-color: #ddd">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		display: flex<br>
		justify-content: flex-start
</div>

<div  style="width:200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 150px; background-color: #ddd; display: flex; justify-content:flex-end">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	display: flex;<br>
	justify-content: flex-end
</div>

<div style="width:200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 150px; background-color: #ddd; display: flex; justify-content:center">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	display: flex<br>
	justify-content:center
</div>

<div style="width:200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-between">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	display: flex<br>
	justify-content: space-between
</div>

<div style="width:200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-around">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	display: flex<br>
    justify-content:space-around
</div>

<div style="width:200px; height: 200px; background-color: #eef">
	<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-evenly">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	display: flex<br>
    justify-content: space-evenly
</div>

</div>
<br>

<h2>align-items</h2>

<div style="display: flex; justify-content: space-around">

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: flex-start }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: flex-start">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: flex-end }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: flex-end">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: center }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: center">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: stretch }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: stretch">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: baseline }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: baseline">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

<div style="width:200px; height: 200px;">
.container { display: flex; align-items: first baseline }
<div style="width: 200px; height: 100px; background-color: #ddd; display: flex; align-items: first baseline">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
</div>

</div>

<h2>alighn content</h2>

<div style="width: 200px; height: 200px; background-color: #ddd; flex-wrap: wrap;  display: flex; align-content: flex-start;">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>




</div>
</body>
</html>