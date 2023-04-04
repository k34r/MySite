<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSS</title>
	<link rel="stylesheet" type="text/css" href="./CSS/about_css.css">
</head>
<body>
<?php
require_once 'PageComponents/header.html';
?>
<main>
<div class="cards">
	<ul>
		<h2>сбрасывание стилей</h2>
 		<li> margin: 0</li>
 		<li> padding: 0</li>
 		<li> box-sizing: border-box</li>
	</ul>


	<ol>
		<h2>значения свойства display</h2>
		<li>1.none</li>
		<li>2.inline</li>
		<li>3.block</li>
		<li>4.inline-block</li>
		<li>5.flex</li>
		<li>6.grid</li>
	</ol>

	<ul>
		<h2>единицы измерения</h2>
		<li>px - пиксель</li>
		<li>100vh - 100% высоты окна браузера</li>
		<li>100vw - 100% ширины окна браузера</li>
		<li>vmin - 1% меньшего размера окна браузера по высоте или ширине</li>
		<li>vmax - 1% большего размера окна браузера по высоте или ширине</li>
		<li>em - размер относительно размера шрифта родителя</li>
		<li>rem(root em) - размер относительно корневого размера шрифта</li>
		<li>fr - определенная доля от общего доступного пространства</li>
	</ul>

	<ol>
		<h2>значения свойства position</h2>
		<li>static</li>
		<li>relative</li>
		<li>absolute</li>
		<li>fixed</li>
		<li>sticky</li>
	</ol>

	<ul>
		<h3>значения свойства align-items</h3>
		<li>1.start</li>
		<li>2.center</li>
		<li>3.end</li>
		<li>4.stretch</li>
		<li>5.baseline</li>
	</ul>
</div>














<div style=" display: flex; flex-wrap: wrap; justify-content: flex-start">

	<div class="container1">
		<div class="container2">
			<p class="item1" style=" left: 20px">1</p>
			<p class="item2" style="position: relative;left: 5px; top: 5px;">2</p>
			<p class="item3" style="position: absolute; left: 20px; top: 30px;">3</p>
		</div >
		<p class="text">1 position: static; left: 20px</p>
		<p class="text">2 position: relative; left: 5px; top: 5px</p>
		<p class="text">3 position: absolute; left: 20px; top: 30px</p>
	</div>

	<div class="container1">
		<div class="container2">
			<p class="item1" style="animation: rotate 1s infinite;">1</p>
		</div >
		<p class="text">@keyframes rotate {
	from {
		transform: rotateX(0deg);
	}
	to {
		transform:  rotateX(360deg);
	}
}</p>
<p class="text">animation: rotate 1s infinite;ё1</p>
	</div>

	<div class="container1">
		<div class="container2">
			<p class="item1" style="display: inline">1</p>
			<p class="item2" style="display: inline">2</p>
			<p class="item3" style="display: inline">3</p>
		</div >
		<p class="text">display: inline</p>
	</div>

	<div class="container1">
		<div class="container2">
			<p class="item1" style="display: block">1</p>
			<p class="item2" style="display: block">2</p>
			<p class="item3" style="display: block">3</p>
		</div >
		<p class="text">display: block</p>
	</div>

	<div class="container1">
		<div class="container2">
			<p class="item1" style="display: inline-block">1</p>
			<p class="item2" style="display: inline-block">2</p>
			<p class="item3" style="display: inline-block">3</p>
		</div >
		<p class="text">display: inline-block</p>
	</div>


	<div class="container1">
		<div class="container2" style="display: flex; flex-wrap: wrap; ">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div >
		<p class="text">display: flex;</p>
		<p class="text">flex-wrap: wrap;</p>
	</div>

	<div class="container1">
	<div class="container2" style="display: flex; justify-content:flex-start;">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content: flex-start</p>
	</div>

	<div class="container1">
		<div  class="container2" style=" display: flex; justify-content:center">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content:center</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:flex-end">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content: flex-end</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-between">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content: space-between</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-around">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content:space-around</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; justify-content:space-evenly">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">justify-content: space-evenly</p>
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; align-items: flex-start">
		<p class="item1"></p>
		<p class="item2"></p>
		<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		<p class="text">align-items: flex-start</p>
	</div>

	<div class="container1">
		<div class="container2" style="display: flex; align-items: flex-end">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		align-items: flex-end
	</div>

	<div class="container1">
		<div class="container2" style=" display: flex; align-items: center">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		align-items: center
	</div>

	<div class="container1">
  	<div class="container2" style=" display: flex; align-items: stretch">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		align-items: stretch
	</div>

	<div class="container1">
  	<div class="container2" style=" display: flex; align-items: baseline">
			<p class="item1"></p>
			<p class="item2"></p>
			<p class="item3"></p>
		</div>
		<p class="text">display: flex;</p>
		align-items: baseline
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
		<p class="text">display: flex;</p>
		align-content: flex-start
	</div>

	<div class="container1">
		<div class="container2" style="width: 100%;  background-color: #ddd; display:grid; grid-template-columns: repeat(3,1fr); grid-column-gap: 5px ;">
			<p class="item1" style="grid-column: span 1; width:100%"></p>
			<p class="item2" style="grid-column: span 1; width:100%"></p>
			<p class="item3" style="grid-column: span 1; width:100%"></p>
		</div>
		<p class="text">display: grid</p>
		<p class="text">grid-template-columns: repeat(3,1fr)</p>
		<p class="text">grid-column-gap: 5px</p>
	</div>

</div>


</main>
</body>
</html>