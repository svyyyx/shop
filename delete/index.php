<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","dv");
 	$text_query = "SELECT * FROM contacts";
	$query = mysqli_query($connect, $text_query);
	echo "<form action='insert.php'>
			<input name='deletes' id='deletes'></input>
			<button>Удалить</button>
		</form>";

	for ($i=0; $i <  $query->num_rows; $i++) { 
		$result = $query->fetch_assoc(); 

		echo "<h1>".$result[name]."</h1>
		<h5>".$result[number]."</h5>";
		
	}
		
	?>


	<?php 
			$text = "DELETE FROM contacts WHERE id = '10' "; // "DELETE FROM таблица WHERE id = '10' "
		mysqli_query($connect, $text);
		if ($connect == false) {
			echo "Не подключено";
		}
		else{
			echo "Подключено";
		};
		if ($text == false) {
			echo "Не подключено";
		}
		else{
			echo "Подключено";
		}
	 ?>


	
	
</body>
</html>