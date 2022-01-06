<?php

	/*  
		Переменные сессии не передаются индивидуально на каждую новую страницу, 
		вместо этого они извлекаются из сессии, которую мы открываем в начале каждой страницы функцией session_start()
	*/
	session_start();
					
?>


<!doctype html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	
	
	
	<title>Управление заметками</title>
	
	</head>
	
	<body class="text-center">
		
		<a href='index.php'>Страница авторизации</a>
						
		<h1 class="text-left"><strong>All notes</strong></h1>	
		
		<a class="btn btn-primary btn-lg" href="addNote.php?id='.$_SESSION['id'].'" role="button">Add note</a>
		
		<br>
		<br>
		<br>
		
	<?php
		
		require 'Database.php';
			
		$host = 'localhost';  		
		$user = 'root';       		
		$pass = ''; 	      		
		$db_name = 'notebookdb';
						
		$database = new Database;
		
		$link = $database->connectDB($host, $user, $pass, $db_name);
		
		if ($link){		
			$database->listNotes($link);   // Вывод всех заметок пользователя.		
		}else {
			echo 'Ошибка соединения с базой данных. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
		}	
					
	
	?>
							
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	
	</body>
</html>
				