<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","dv");
	$deleting = "DELETE FROM contacts WHERE id = '".$_GET[deletes]."'";
 	$zapros_vvoda = mysqli_query($connect, $deleting); //запрос для ввода в таблицу

 	header('Location: index.php')
?>