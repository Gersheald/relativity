<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>registration form</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_home.css">
        
        
	</head>
    <body>
        <div class="conteiner mt-4">
            <h1>
                register
            </h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="first name" id="first name" placeholder="enter your first name">
                <input type="text" class="form-control" name="last name" id="last name" placeholder="enter your last name">
                <input type="text" class="form-control" name="email" id="email" placeholder="enter your email">
                <input type="text" class="form-control" name="login" id="login" placeholder="enter your login">
                <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
                <button class="btn btn-success" type="submit">
                    register
                </button>
            </form>
            <p>
                back
            </p>
            <p>
                or sign in
            </p>
        </div>
    </body>
</html>  
       