<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>sign in form</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_home.css">
	</head>
    <body>
        <div class="conteiner mt-4">
            <h1>
                sign in
            </h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="sign_in_login" id="sign_in_login" placeholder="enter your login">
                <input type="text" class="form-control" name="sign_in_password" id="sign_in_password" placeholder="enter your password">
                <button class="btn btn-success" type="submit">
                    sign in
                </button>
                <a class="btn btn-primary" href="../index.html" role="button">go back</a>
            </form>
            <p>
                or
            </p>
            <a class="btn btn-primary" href="./register.php" role="button">register</a>
        </div>
    </body>
</html>  
       