<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<title>Вход/Регистрация</title>
</head>
<body>

	<div class="container mt-4">
		<div class="row">
			<div class="col">
				<h1>Форма регистрации</h1>
				<form action="check.php" method="post">
                    <input type="text" name="Client_Passport_main" class="form-control" id="Client_Passport_main" placeholder="ФИО" required><br>
					<input type="text" name="Client_Passport_adress	" class="form-control" id="Client_Passport_adress" placeholder="Адрес" required><br>
                    <input type="text" name="Client_Driving_licence	" class="form-control" id="Client_Driving_licence" placeholder="Номер прав" required><br>
                    <input type="text" name="Client_Number" class="form-control" id="Client_Number" placeholder="Номер телефона" required><br>
                    <input type="text" name="Client_drivingEXP" class="form-control" id="Client_drivingEXP" placeholder="Стаж вождения" required><br>
                    <input type="text" name="Client_age" class="form-control" id="Client_age" placeholder="Возраст" required><br>
                    <input type="text" name="Client_login" class="form-control" id="Client_login" placeholder="Логин" required><br>
					<input type="password" name="Client_password" class="form-control" id="Client_password" placeholder="Пароль" required><br>
					<button class="btn btn-success"></button><br>
					<h1>Добавить изображение</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="img" placeholder="Картинка">
                        <input type="submit" value="Загрузить" name="uploud">
                    </form>
				</form> 
			</div>
			
			<div class="col">
				<h1>Форма Авторизации</h1>
				<form action="auth.php" method="post">
					<input type="text" name="Client_login" class="form-control" id="Client_login" placeholder="Логин"><br>
					<input type="Client_password" name="pass" class="form-control" id="Client_password" placeholder="Пароль"><br>
					<button class="btn btn-success">Авторизоваться</button><br>
				</form> 
			</div>

		</div>
	</div>
	
</body>
</html>