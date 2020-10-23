<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","shop");
	$text_zaprosa_vstavit = "INSERT INTO products (title, description, img, price) VALUES ('{$_GET["title"]}' ,'{$_GET["description"]}','{$_GET["img"]}','{$_GET["price"]}')";
 	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); //запрос для ввода в таблицу

 	header('Location: index.php')
?>