<?php

class Auth {
	
	 
	public function checkUser(){
		
		// Заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную.
		if (isset($_POST['login'])) {
			
			$login = $_POST['login']; 
			
			if ($login == '') { 
				unset($login);
			} 
		} 
	   
	   if (isset($_POST['password'])) {
		   
			$password=$_POST['password'];

			if ($password =='') {
			   unset($password);
			} 
		}
		
		if (empty($login) or empty($password)){		
			 return false;
		}
		
		return true;
		
	}
	
	public function saveUser($db){
				
		//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		$login = stripslashes($_POST['login']);
		$login = htmlspecialchars($_POST['login']);
		$password = stripslashes($_POST['password']);
		$password = htmlspecialchars($_POST['password']);
		
		
		//удаляем лишние пробелы
		$login = trim($login);
		$password = trim($password);
		

		// проверка на существование пользователя с таким же логином
		$result = mysqli_query($db, "SELECT id FROM users WHERE login='{$login}'");
		$myrow = mysqli_fetch_array($result);
		
		if (!empty($myrow['id'])) {
			exit ("Введённый вами логин уже зарегистрирован. Введите другой логин.");
		}
		
	   
		try{
			
			$conn = new PDO("mysql:host=localhost;dbname=notebookdb;charset=utf8;", 'root', '');
				
			$msg_id = $conn->lastInsertId();
			
			
			// Без указания id запись в бд не создается и ошибки нет при этом.
			$sth = $conn->exec("INSERT INTO users VALUES ('{$msg_id}', '{$login}', '' ,  '{$password}')");			
				
			echo('Учетная запись создана.');
			header("Location: index.php");
			
		}
		catch(PDOException $e)
		{
			echo "error" .$e->getMessage();
		}
			
	}
	
	public function regUser($db){		
	  
		//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
		$login = stripslashes($_POST['login']);
		$login = htmlspecialchars($_POST['login']);
		$password = stripslashes($_POST['password']);
		$password = htmlspecialchars($_POST['password']);
		
		//удаляем лишние пробелы
		$login = trim($login);
		$password = trim($password);		

		// Извлекаем из базы все данные о пользователе с введенным логином.
		$result = mysqli_query($db, "SELECT * FROM users WHERE login='{$login}'"); 
		$myrow = mysqli_fetch_array($result);
		if (empty($myrow['password']))
		{
			//если пользователя с введенным логином не существует
			exit ("Введённый вами login или пароль неверный.");
		}
		else {
			//если существует, то сверяем пароли
			if ($myrow['password']==$password) {
			//если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
			$_SESSION['login']=$myrow['login'];
			//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
			$_SESSION['id']=$myrow['id'];
			// Если пароль верный, тогда перенаправить пользователя на страницу со всеми его заметками.
			echo "Вы успешно вошли на сайт! " . '</br>'.
			"<a href='notes.php'>Перейти на страницу с моими заметками</a>";
		}
		else {
			//если пароли не сошлись
			exit ("Введённый вами login или пароль неверный.");
		}
		}
		
	}
	
}


?>