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
<style>
/* open-sans-regular - cyrillic_latin */
@font-face {
  font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url('../fonts/open-sans-v34-cyrillic_latin-regular.eot'); /* IE9 Compat Modes */
  src: url('../fonts/open-sans-v34-cyrillic_latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('../fonts/open-sans-v34-cyrillic_latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
       url('../fonts/open-sans-v34-cyrillic_latin-regular.woff') format('woff'), /* Modern Browsers */
       url('../fonts/open-sans-v34-cyrillic_latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
       url('../fonts/open-sans-v34-cyrillic_latin-regular.svg#OpenSans') format('svg'); /* Legacy iOS */
}
/* open-sans-500 - cyrillic_latin */
@font-face {
  font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 500;
  src: url('../fonts/open-sans-v34-cyrillic_latin-500.eot'); /* IE9 Compat Modes */
  src: url('../fonts/open-sans-v34-cyrillic_latin-500.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
       url('../fonts/open-sans-v34-cyrillic_latin-500.woff2') format('woff2'), /* Super Modern Browsers */
       url('../fonts/open-sans-v34-cyrillic_latin-500.woff') format('woff'), /* Modern Browsers */
       url('../fonts/open-sans-v34-cyrillic_latin-500.ttf') format('truetype'), /* Safari, Android, iOS */
       url('../fonts/open-sans-v34-cyrillic_latin-500.svg#OpenSans') format('svg'); /* Legacy iOS */
}

@keyframes rotate {
	from {
		transform: rotateX(0deg);
	}
	to {
		transform:  rotateX(360deg);
	}
}

body{font-family: 'Open Sans';
		font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.4;
    color: #000;}
	h1{font-size: 32px; text-align: center}
 		h2{font-size: 20px; text-align: center}
 		p{margin: 0}
 		b{margin: 30px}
 		.container1{width: 150px;  background-color: #eef; margin: 10px 10px; position: relative;}
 		.container2{background-color: #9db4c3;}
 		.item1{width:30px; height: 40px; background-color: lime; opacity: 0.7}
		.item2{width:40px; height: 50px; background-color: yellow; opacity: 0.7}
		.item3{width:25px; height: 30px; background-color: red; opacity: 0.7;}
		.item11{ background-color: lime; opacity: 0.7}
		.item22{ background-color: yellow; opacity: 0.7; }
		.item33{ background-color: red; opacity: 0.7;}
}

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

<h2>значения свойства position</h2>
<ol>
	<li>static</li>
	<li>relative</li>
	<li>absolute</li>
	<li>fixed</li>
	<li>sticky</li>
</ol>














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



</body>
</html>