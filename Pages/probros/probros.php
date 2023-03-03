<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Probros</title>
	<link rel="stylesheet" type="text/css" href="CSS/css/bootstrap.min.css">
</head>
<body>
	<?php require_once 'PageComponents/header.html'; ?>

<?php
$city = 'Ivanovo';
?>

<script type="text/javascript">
var town = '<?php echo $city;?>';           
document.write('Город невест и молодежи: ' + town);
</script><br>	


<?php $expression = 0; if ($expression == true): ?>
  Это будет отображено, если выражение истинно.
<?php else: ?>
  В ином случае будет отображено это.
<?php endif; ?>

<br>

<?php for ($i = 0; $i < 5; ++$i): ?>
Hello, there!
<?php endfor; ?>






</body>
</html>