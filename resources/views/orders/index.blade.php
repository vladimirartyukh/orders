<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex, nofollow"/>
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Название фирмы/Название базы</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/my-css.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<div class="container">
			<div class="row">
				<h1  class="my-text-center">Название программы</h1>
			
				<form action="#" method="post"  enctype="multipart/form-data">
				<!-- Поле выбора пользователя -->
				<label for="user" class="my-text-center">Пользователь</label>
					<div class="form-group  my-width-100">
						<select class="form-control  input-lg" id ="user">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>					
					</div><!--/. form-group -->	
					
				<!-- Поле выбора пользователя -->	
					
					<div class="form-group">
						<label for="password"  class="my-text-center">Пароль</label>
						<input type="password" class="form-control  input-lg" id="password" placeholder="Password">
					</div><!--/. form-group -->
					<button type="submit" class="btn btn-success btn-lg my-width-100">Войти</button>
				</form><!--/. multipart/form-data -->
			</div><!--/. row -->	
		</div><!--/. container -->	

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>