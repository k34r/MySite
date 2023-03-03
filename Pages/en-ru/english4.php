<?php

$pdo = new PDO('mysql:host=localhost;sdbname=english_words','root','');

$res = $pdo->query('SELECT COUNT(*) FROM k34r.english_words'); 
$num = $res->fetchColumn(); //получаем количество строк в базе
$id = rand(1,$num); //выбираем случайный id 

$query = $pdo->query("SELECT * FROM k34r.english_words WHERE id=$id");
$word = $query->fetch(PDO::FETCH_OBJ);
$eng_word = $word->english;
$rus_word = $word->russian;
$arr = [$eng_word, $rus_word, $num]; // берём случайное слово из базы


echo json_encode($arr);

?>