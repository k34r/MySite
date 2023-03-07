<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSS</title>
	<link rel="stylesheet" type="text/css" href="./CSS/my.css">
</head>
<body>
<?php
require_once 'PageComponents/header.html';
?>
<style> h1{font-size: 32px; text-align: center}
 		h2{font-size: 20px; text-align: center}
 		p{margin: 0}
 		b{margin: 30px}
 		.container1{width: 200px; height: 200px; background-color: #eef; margin: 15px 15px}
		.item1{width:30px; height: 40px; background-color: #9e9;}
		.item2{width:40px; height: 50px; background-color: #ee9;}
		.item3{width:25px; height: 30px; background-color: #e99;}

</style>
<h2>Единицы измерения</h2>
<ul>
	<li>px - пиксель</li>
	<li>vh - 1% высоты окна браузера</li>
	<li>vw - 1% ширины окна браузера</li>
	<li>vmin - 1% меньшего размера окна браузера по высоте или ширине</li>
	<li>vmax - 1% большего размера окна браузера по высоте или ширине</li>
	<li>em - размер относительно размера шрифта родителя</li>
	<li>rem(root em) - размер относительно корневого размера шрифта</li>
</ul>



<h1>flexbox</h1><br>

<b>.container { display: flex }</b>

<div style="display: flex; flex-wrap: wrap; justify-content: space-around">

	<div class="container1">
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
			flex-wrap: wrap
	</div>

	<div class="container1">
	<div style="display: flex; justify-content:flex-start; width: 200px; height: 150px; background-color: #ddd">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		justify-content: flex-start
	</div>

	<div class="container1">
		<div style="width: 200px; height: 150px; background-color: #ddd; display: flex; justify-content:center">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		justify-content:center
	</div>

	<div class="container1">
		<div style="width: 200px; height: 150px; background-color: #ddd; display: flex; justify-content:flex-end">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		justify-content: flex-end
	</div>

	<div class="container1">
		<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-between">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
	justify-content: space-between
	</div>

	<div class="container1">
		<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-around">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		justify-content:space-around
	</div>

	<div class="container1">
		<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; justify-content:space-evenly">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		justify-content: space-evenly
	</div>

	<div class="container1">
		<div style="width: 200px; height: 130px; background-color: #ddd; display: flex; align-items: flex-start">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		align-items: flex-start
	</div>

</div>

<h2>align-items</h2>

<div style="display: flex; justify-content: space-around">



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

<h2>grid</h2>


</div>
</body>
</html>