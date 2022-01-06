<?php


	// Вся процедура работает на сессиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. 
	session_start();
	
	require 'Database.php';
		
	$host = 'localhost';  		
	$user = 'root';       		
	$pass = ''; 	      		
	$db_name = 'notebookdb';    
		
	$database = new Database;
	
	$link = $database->connectDB($host, $user, $pass, $db_name);
	
	if ($link){
		$database->delNote($link);
	}else {
		echo 'Ошибка соединения с базой данных. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
	}
	

?>