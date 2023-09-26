<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>newsletter</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_home.css">
	</head>
    <body>
        <div class="conteiner mt-4">
            <h1>
                newsletter
            </h1>
            <p>
                subscribe us to get media and more information about Relativity events
            </p>
            <form action="../index.php" method="post">
                <input type="text" class="form-control" name="email" id="email" placeholder="enter your email">
                <button class="btn btn-success" type="submit" name="subscribe">
                    subscribe
                </button>
                <button class="btn btn-danger" type="" name="">
                    unsubscribe
                </button>
            </form>
            <a class="btn btn-primary" href="../index.php" role="button">go back</a>
        </div>
    </body>
</html>  
       