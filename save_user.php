<!DOCTYPE html>
<html lang="en">
	<head >
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
				
	
	</head>
	<body class="text-center">
	
		<a href='index.php'>Страница авторизации</a>
		<br>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	
		
	</body>
</html>
	 

<?php
   
   require 'Auth.php';
   require 'Database.php';
   
   $authUser = new Auth;
   $database = new Database;
   
   $host = 'localhost';  		
   $user = 'root';       		
   $pass = ''; 	      		
   $db_name = 'notebookdb'; 	
	
   
   if($authUser->checkUser()){
	  $connection = $database->connectDB($host, $user, $pass, $db_name);
	  $authUser->saveUser($connection);
   }else {
	   echo "Вы ввели не всю информацию, вернитесь назад и заполните все поля.";
   }
   
?>