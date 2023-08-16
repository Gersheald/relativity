<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>registration form</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="./css/style_home.css">
	</head>
    <body>
        <div class="conteiner">
            <h1>
                register
            </h1>
            <form action="" method="post">
                <input type="text" class="form-control" name="payload type" id="payload type" placeholder="enter your payload type">
                <input type="text" class="form-control" name="payload weight" id="payload weight" placeholder="enter your payload weight">
                <input type="text" class="form-control" name="orbit type" id="orbit type" placeholder="enter orbit type">
                <input type="text" class="form-control" name="launch date" id="launch date" placeholder="select launch date">
                <input type="text" class="form-control" name="order total" id="order total" placeholder="">
                <button>
                    order now
                </button>
            </form>
        </div>
    </body>
</html>  
       