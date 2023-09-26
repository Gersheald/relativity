<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>Форма расчёта</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/style_home.css">
	</head>
    <body>
        <div class="conteiner mt-4">
            <h1>
                Рассчитать стоимость пусковых услуг
            </h1>
                <form action="register_ru.php" method="post">
                    <!-- <input type="text" class="form-control" name="calculate_2_payload_type" id="calculate_2_payload_type" placeholder="enter your payload type">
                    <input type="text" class="form-control" name="calculate_2_payload_weight" id="calculate_2_payload_weight" placeholder="enter your payload weight">
                    <input type="text" class="form-control" name="calculate_2_orbit_type" id="calculate_2_orbit_type" placeholder="enter orbit type">
                    <input type="text" class="form-control" name="calculate_2_launch_date" id="calculate_2_launch_date" placeholder="select launch date"> -->
                    <!-- <input type="text" class="form-control" name="calculate_2_order_total" id="calculate_2_order_total" placeholder=""> -->
                    <select type="text" class="form-control" name="calculate_2_payload_type" id="calculate_2_payload_type">
                        <option value="">--Пожалуйста выберете тип Вашей полезной нагрузки--</option>
                        <option value="Спутник">Спутник</option>
                        <option value="Космический зонд">Космический зонд</option>
                        <option value="Космический корабль">Космический корабль</option>
                    </select>
                    <!-- <script>
                    $("#calculate_2_payload_type").val(50);
                    </script> -->

                    <script language="JavaScript" type="text/javascript">
                        function mult(value){
                        var x;
                        x = value;
                        document.getElementById('calculate_2_price').value = x;
                        }
                    </script>
                    <div class="input-group">
                        <input type="text" class="form-control" name="calculate_2_payload_weight" id="calculate_2_payload_weight" placeholder="Пожалуйста введите вес Вашей полезной нагрузки" onkeyup="mult(this.value);">
                        <div class="input-group-append">
                            <span class="input-group-text">кг</span>
                        </div>
                    </div>
                    <!-- <span class="input-group-text">$</span> -->
                    <!-- <span class="input-group-text">.00</span> -->
                    <!-- <select type="text" class="form-control" name="calculate_2_orbit_type" id="calculate_2_orbit_type" >
                        <option value="" >--Select orbit type--</option>
                        <option value="9600">LEO (Low Earth Orbit)</option>
                        <option value="13300">SSO (Sun Synchronous Orbit)</option>
                    </select> -->
                    <select id="calculate_2_orbit_type" type="text" class="form-control" name="calculate_2_orbit_type" onchange="my_fun(this.value);" >
                        <option value="" >--Пожалуйста выберете тип орбиты--</option>
                        <option value="960000">НОО (Низкая Околоземная Орбита)</option>
                        <option value="1330000">ССО (Солнечно-синхронная орбита)</option>
                        <!-- <option value="MEO">MEO (Medium Earth Orbit)</option>
                        <option value="GEO">GEO (Geosynchronous Equatorial Orbit)</option> -->
                    </select>
                    <script language="JavaScript" type="text/javascript">
                        function my_fun(value){
                        var y;
                        y = value;
                        document.getElementById('test').value = y;       
                        }
                    </script>
                    <div class="input-group">
                        <input type="text" class="form-control" name="test" placeholder="Удельная стоимость выведения" id="test">
                        <div class="input-group-append">
                            <span class="input-group-text">руб./кг</span>
                        </div>
                    </div>
                    <select type="text" class="form-control" name="calculate_2_launch_date" id="calculate_2_launch_date">
                        <option value="">--Пожалуйста выберете дату запуска--</option>
                        <option value="13.05.2023">13.05.2023</option>
                        <option value="13.06.2023">13.06.2023</option>
                        <option value="13.07.2023">13.07.2023</option>
                        <option value="13.08.2023">13.08.2023</option>
                        <option value="13.09.2023">13.09.2023</option>
                        <option value="13.10.2023">13.10.2023</option>
                        <option value="13.11.2023">13.11.2023</option>
                        <option value="13.12.2023">13.12.2023</option>
                    </select>
                    <script>
                    function sumInputs() {
                    let num1 = Number( document.getElementById("calculate_2_payload_weight").value );
                    let num2 = Number( document.getElementById("calculate_2_orbit_type").value );
                    document.getElementById('calculate_2_price').value = num1 * num2;     
                    }
                    </script>
                    <div class="input-group">
                        <input type="" id="calculate_2_price" class="form-control" name="calculate_2_price" placeholder="Стоимость выведения" >
                        <div class="input-group-append">
                            <span class="input-group-text">руб.</span>
                        </div>
                    </div>
                <!-- <input type="text" class="form-control" name="calculate_2_payload_weight" id="calculate_2_payload_weight" placeholder="enter your payload weight"> -->
                    <button type="submit" class="btn btn-success" name="order_now" >
                        Заказать
                    </button >
                    <a class="btn btn-primary" href="../html/index_home_ru.php" role="button">Назад</a>
                </form>
                <button class="btn" onClick="sumInputs()">Рассчитать стоимость заказа</button>
                <!-- <a type="submit" class="btn btn-primary" href="register.php" role="button">Go back</a> -->
                
            <!-- <button class="btn btn-secondary"  href="../index.html">
                go back
            </button> -->
        </div>
    </body>
</html>  
       