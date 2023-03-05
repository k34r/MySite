<!DOCTYPE html>
<html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>english-russian</title>
  <link rel="stylesheet" type="text/css" href="CSS/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./CSS/my.css">
  </head>

<body style="background-color: #ddf;">
  <?php require_once 'PageComponents/header.html'; ?>
<div class="mt-4">
<div id="topper" class="container">
<!--<span id="p1">Количество слов в базе: </span><br>
<span id="i">Использовано слов: </span><br>
<span id="right">Правильных ответов: </span><br>
<span id="wrong">Неправильных ответов: </span><br>
<span id="percent" >Процент правильных ответов: </span><br>
<span id="timer">Таймер:</span>
<span id="i"></span>-->
<!--<button id="starttimer" onclick="starttimer()">start</button>
<button id="stoptimer" onclick="stoptimer()">stop</button>-->
<ul class="list-group" >
  <li style="background-color: #eef;" id="p1" class="list-group-item">Количество слов в базе: </li>
  <li style="background-color: #eef;" id="i" class="list-group-item">Использовано слов: </li>
  <li style="background-color: #eef;" id="right" class="list-group-item">Правильных ответов: </li>
  <li style="background-color: #eef;" id="wrong" class="list-group-item">Неправильных ответов: </li>
  <li style="background-color: #eef;" id="percent" class="list-group-item">Процент правильных ответов: </li>
  <li style="background-color: #eef;" id="timer" class="list-group-item">Таймер:</li>
</ul>
</div>
</div>

<div class="container">
  <div class="mt-4">
  <p id="message" class="form-label"></p><br>
  </div>

  <input  id="userinput"  class="form-control" type="text" name="userinput" onblur="this.focus()" autofocus >

  <div class="mt-4">
  <input id="start" style="none" class="btn btn-primary" type="button" value="START" onclick="EnglishWord(),starttimer()">
  </div>
</div>


<!-- <form class="container">

  <div class="mt-4">
  	<p id="message"></p>
    <label  id="message" class="form-label">english</label>
    <input id="userinput" class="form-control" type="text" name="userinput" onblur="this.focus()" autofocus >
  </div>
  <div class="mt-4">
  <button id="start" type="submit" class="btn btn-primary" onclick="EnglishWord(),starttimer()">Start</button>
  </div>
</form> -->

<script src="Pages/en-ru/english4.js"></script>
</body>
</html>
