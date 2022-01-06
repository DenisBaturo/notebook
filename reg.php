<!DOCTYPE html>
<html>
    <head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
		<title>Регистрация</title>
    </head>
	<body class="text-center">
		<br>
		<h2>Регистрация</h2>
		<br>
		<br>
		<form action="save_user.php" method="post">
			<!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
			<p>
			<label>Ваш логин:<br></label>
			<input name="login" type="text" size="15" maxlength="15">
			</p>
			<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
			<p>
			<label>Ваш пароль:<br></label>
			<input name="password" type="password" size="15" maxlength="15">
			</p>
			<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
			<p><input type="submit" name="submit" value="Зарегистрироваться"></p>
			<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
		</form>
		
			<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
		
	</body>
</html>