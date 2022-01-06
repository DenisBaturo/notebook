<!DOCTYPE html>
<html lang="en">
	<head >
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>NOTEBOOK</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
				
	
	</head>
	<body class="text-center">
	
		<h2>Страница авторизации</h2>
		
		<br>
		
		<form action="testreg.php" method="post">

		<!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
		<p>
		<label class="col-sm-2 col-form-label">Ваш логин:<br></label>
		<input name="login" type="text" size="15" maxlength="15">
		</p>


		<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
	 
		<p>
		<label for="inputPassword" class="col-sm-2 col-form-label">Ваш пароль:<br></label>
		<input name="password" type="password" size="15" maxlength="15">
		</p>

		<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 

		<p>
		<input type="submit" name="submit" value="Войти" class="btn btn-primary">

		<!--**** Кнопка (type="submit") отправляет данные на страницу testreg.php ***** --> 
		<br>
		<br>
		<!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
		<!--<a href="reg.php">Зарегистрироваться</a>-->	
		<a class="btn btn-primary btn-lg" href="reg.php" role="button">Зарегистрироваться</a>
		</p>
		</form>
		
		<br>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	
		
	</body>
</html>
	 
	 
