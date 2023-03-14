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
 		.container1{width: 200px;  background-color: #eef; margin: 10px 10px; position: relative;}
 		.container2{background-color: #9db4c3;}
 		.item1{width:30px; height: 40px; background-color: lime; opacity: 0.7}
		.item2{width:40px; height: 50px; background-color: yellow; opacity: 0.7}
		.item3{width:25px; height: 30px; background-color: red; opacity: 0.7;}

</style>
<h2>Сбрасывание стилей</h2>
* {<br>
  margin: 0;<br>
  padding: 0;<br>
  box-sizing: border-box;<br>
}
<h2>Единицы измерения</h2>
<ul>
	<li>px - пиксель</li>
	<li>100vh - 100% высоты окна браузера</li>
	<li>100vw - 100% ширины окна браузера</li>
	<li>vmin - 1% меньшего размера окна браузера по высоте или ширине</li>
	<li>vmax - 1% большего размера окна браузера по высоте или ширине</li>
	<li>em - размер относительно размера шрифта родителя</li>
	<li>rem(root em) - размер относительно корневого размера шрифта</li>
	<li>fr - определенная доля от общего доступного пространства</li>
</ul>



<h2>display: flex</h2><br>

<div style=" display: flex;  justify-content: space-around">

	<div class="container1">
		<div class="container2" style="display: flex; flex-wrap: wrap; ">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div >
		<p class="text">flex-wrap: wrap</p>
	</div>

	<div class="container1">
	<div class="container2" style="display: flex; justify-content:flex-start;">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		<p class="text">justify-content: flex-start</p>
	</div>

	<div class="container1">
		<div  class="container2" style=" display: flex; justify-content:center">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">justify-content:center</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:flex-end">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">justify-content: flex-end</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-between">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
	<p class="text">justify-content: space-between</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-around">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">justify-content:space-around</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-evenly">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">justify-content: space-evenly</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; align-items: flex-start">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		<p class="text">align-items: flex-start</p>
	</div>

</div>



<div style="display: flex; justify-content: space-around">

	<div class="container1">
		<div class="container2" style="display: flex; align-items: flex-end">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		align-items: flex-end
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; align-items: center">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		align-items: center
	</div>

	<div class="container1">
  	<div class="container2" style=" display: flex; align-items: stretch">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		align-items: stretch
	</div>

	<div class="container1">
  	<div class="container2" style=" display: flex; align-items: baseline">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		align-items: baseline
	</div>

</div>



<div class="container1">
	<div class="container2" style="display: flex; align-content: flex-start;">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
	</div>
	align-content: flex-start
</div>

<h2>grid</h2>
<p>display: grid</p>
<p>grid-template-columns: repeat(3,1fr)<p>
<p>grid-column-gap: 5px</p>


<div style="width: 200px; height: 200px; background-color: #ddd; display:grid; grid-template-columns: repeat(3,1fr); grid-column-gap: 5px ;">
	<p class="item1"></p>
	<p class="item2"></p>
	<p class="item3"></p>
</div>

</body>
</html>