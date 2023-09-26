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
                calculate
            </h1>
            <form action="check.php" method="post">
                <input type="text" class="form-control" name="calculate_payload_type" id="calculate_payload_type" placeholder="enter your payload type">
                <input type="text" class="form-control" name="calculate_payload_weight" id="calculate_payload_weight" placeholder="enter your payload weight">
                <input type="text" class="form-control" name="calculate_orbit_type" id="calculate_orbit_type" placeholder="enter orbit type">
                <input type="text" class="form-control" name="calculate_launch_date" id="calculate_launch_date" placeholder="select launch date">
                <input type="text" class="form-control" name="calculate_order_total" id="calculate_order_total" placeholder="">
                <button class="btn btn-success" type="submit">
                    order now
                </button>
                <a class="btn btn-primary" href="../index.php" role="button">go back</a>
            </form>
            <!-- <button class="btn btn-secondary"  href="../index.html">
                go back
            </button> -->
        </div>
    </body>
</html>  
       