<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>Регистрационная форма</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_home.css">
        
        
	</head>
    <body>
        <div class="conteiner mt-4">
        
            <h1>
                Регистрация
            </h1>
            

        <?php
            //-----------------------------------calculate_2 form-----------------------------------------------
            $connection = mysqli_connect("relativity","root","7064");
            $db = mysqli_select_db($connection, 'relativity');
            
            if(isset($_POST['order_now']))
            {
                $calculate_2_payload_type=$_POST['calculate_2_payload_type'];
                $calculate_2_payload_weight=$_POST['calculate_2_payload_weight'];
                $calculate_2_orbit_type=$_POST['calculate_2_orbit_type'];
                $calculate_2_launch_date=$_POST['calculate_2_launch_date'];
                $calculate_2_price=$_POST['calculate_2_price'];

                // $query = "INSERT INTO `payload_type`(`payload_type`) VALUES ('$calculate_2_payload_type')";
                // $query_run = mysqli_query($connection,$query);

                // $query = "INSERT INTO `calculate_2`(`calculate_2_payload_type`, `calculate_2_payload_weight, `calculate_2_orbit_type`, `calculate_2_launch_date`) VALUES ('$calculate_2_payload_type', '$calculate_2_payload_weight', '$calculate_2_orbit_type', '$calculate_2_launch_date')";
                // $query_run = mysqli_query($connection,$query);


                $query_1 = "INSERT INTO `payload_type`(`payload_type`) VALUES ('$calculate_2_payload_type')";
                $query_run_1 = mysqli_query($connection,$query_1);
                $query_2 = "INSERT INTO `payload_weight`(`payload_weight`) VALUES ('$calculate_2_payload_weight')";
                $query_run_2 = mysqli_query($connection,$query_2);
                $query_3 = "INSERT INTO `orbit_type`(`orbit_type`) VALUES ('$calculate_2_orbit_type')";
                $query_run_3 = mysqli_query($connection,$query_3);
                $query_4 = "INSERT INTO `launch_date`(`launch_date`) VALUES ('$calculate_2_launch_date')";
                $query_run_4 = mysqli_query($connection,$query_4);
                $query_5 = "INSERT INTO `price`(`price`) VALUES ('$calculate_2_price')";
                $query_run_5 = mysqli_query($connection,$query_5);
                
                

            }
            
            
        ?>


            <form action="../html/index_home_ru.php" method="post">
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Пожалуйста введите Ваше имя">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Пожалуйста введите Вашу фамилию">
                <input type="text" class="form-control" name="company" id="company" placeholder="Пожалуйста введите Ваше название вашей компании">
                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Пожалуйста введите Вашу должность">
                <input type="text" class="form-control" name="email" id="email" placeholder="Пожалуйста введите Ваш адрес электронной почты">
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Пожалйста введите Ваш номер телефона">
                <!-- <input type="text" class="form-control" name="register_login" id="register_login" placeholder="enter your login">
                <input type="password" class="form-control" name="register_password" id="register_password" placeholder="enter your password"> -->
                <button type="submit" class="btn btn-success" name="register">
                    Зарегестрироваться
                </button>
                <a class="btn btn-primary" href="../html/index_home_ru.php" role="button">Назад</a>
            </form>
            <p>
                or 
            </p>
            <a class="btn btn-primary" href="./sign_in.php" role="button">Войти</a>
        </div>
    </body>
</html>  
       