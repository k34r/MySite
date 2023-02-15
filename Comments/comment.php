<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="/../index.html">MySite</a>


	<?php
	$name = '';
	$text = '';

	$pdo = new PDO('mysql:host=localhost;sdbname=k34r.comments','root','');
	$pdo->exec('SET NAMES UTF8');

	if(count($_POST) > 0){
		$name = trim($_POST['name']);
		$text = trim($_POST['text']);
		//$name = strip_tags($name); 
		//$text = strip_tags($text);
		$name = htmlspecialchars($name);//&lt;h1&gt;
		$text = htmlspecialchars($text);

		if($name != '' && $text != ''){
			//$query=$pdo->prepare("INSERT INTO k34r.comments SET name='$name',text='$text'");
			//$query->execute();

           // $query=$pdo->prepare("INSERT INTO k34r.comments SET name=:name,text=:text");
           // $params = ['name'=>$name, 'text'=>$text];
           // $query->execute($params);

            $query=$pdo->prepare("INSERT INTO k34r.comments (name,text) VALUES (:name,:text)");
            $params = ['name'=>$name, 'text'=>$text];
            $query->execute($params);
            


			header('Location: comment.php');
			exit();
		}
	}

	$query = $pdo->prepare('SELECT * FROM k34r.comments ORDER BY date DESC');
	$query->execute();
	$comments = $query->fetchAll();

	
	?>
<form method="post">
	Имя<br>
	<input type="text" name="name" value="<?php echo $name;?>"><br>
	Комментарий<br>
	<textarea name="text"><?php echo $text;?></textarea><br>
	<input type="submit" value="Отправить">
<div class="comments">
	<?php foreach($comments as $one): ?>
		<div class="item">
			<span><?php echo $one['date']; ?></span>
			<strong><?=$one['name']?></strong>
			<div><?=$one['text']?></div>
        </div>
        <hr>
    <?php endforeach; ?>
</div>			
 </form>
</body>
</html>