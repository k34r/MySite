<!DOCTYPE html>
<html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>english-russian</title>
  <link rel="stylesheet" type="text/css" href="./CSS/my.css">
</head>

<body>
  <?php require_once 'PageComponents/header.html'; ?>
  <div class="mt-4">
  <div id="topper" class="container">
   <ul class="list-group" >
     <li id="p1" class="list-group-item">Количество слов в базе: </li>
     <li id="right" class="list-group-item">Правильных ответов: </li>
     <li id="wrong" class="list-group-item">Неправильных ответов: </li>
     <li id="percent" class="list-group-item">Процент правильных ответов: </li>
     <li id="timer" class="list-group-item">Таймер:</li>
    </ul>
  </div>
</div>

<div class="container_user">
  <div class="container_en-word">
     <p id="message" class="english_word"></p>
  </div>
  <div class="container_input">
    <input  id="userinput"  class="user_input" type="text" name="userinput" onblur="this.focus()" autofocus >
  </div>
  <div class="container_button">
     <input id="start" style="none" class="button" type="button" value="START" onclick="EnglishWord(),starttimer()">
  </div>
</div>


<script src="Pages/en-ru/english4.js"></script>
</body>
</html>
