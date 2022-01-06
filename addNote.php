<!DOCTYPE html>
<html lang="en">
	<head >
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
				
	
	</head>
	<body class="text-center">
	
		
		<!-- Форма для добавления новой заметки-->		
		<form action="" method="post">
			
			<br>
			<br>
			<br>
			
			<div class="form-group row">
				<label for="text" class="col-sm-2 col-form-label">Заголовок</label>
				<div class="col-sm-10">
					<input type="text" name="headerAdd" class="form-control" style="display: block">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="text" class="col-sm-2 col-form-label">Текст</label>
				<div class="col-sm-10">
					<input type="text" name="textAdd" class="form-control" style="display: block">
				</div>
			</div>
			
			<input type="submit" value="Add note" class="btn btn-dark">
			
		</form>
		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	
		
	</body>
</html>

<?php 
		
	// Вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. 
	// Очень важно запустить их в самом начале странички!!!
	session_start();
	
	require 'Database.php';
				
	$database = new Database;
	$database->addNote();
	
?>

