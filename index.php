<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--метатег для масштабирования сайта при изменении ширины экрана. назначает, что размер экрана сайта будет соответствовать реальным размерам устройства, у соврмеменных мобильников реальная матрица телефонов сильно меньше 1920 px-->
    	<title>Home</title>
    	<link rel="icon" href="favicon.ico"> <!--здесь подключается фавиконка-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="./css/style_home.css">
	</head>
	<body class="home_body">
        <div class="content">
			<header class="home__header">
                <nav class="header__menu">
                    <div class="header__logo"> 
                        <a href="index.php">
                            <img src="./images/Relativity_White_RGB_900px.png" width = "200px" alt="Relativity Space Logo">
                        </a>
                    </div>
                    <ul class="header__menu-list none_markers"> <!--открывающий тег списка десктопного меню. Добавим этому элементу классы, по которым будем отключать на мобильной и планшетной ширине-->
                        <li class="header__menu-item">
                            <a href="./html/index_rockets_en.html">Rockets</a>
                        </li> 
                        <li class="header__menu-item">
                            <a href="./html/index_engines_en.html">Engines</a>
                        </li> 
                        <li class="header__menu-item">
                            <a href="./html/index_factory_en.html">Factory</a>
                        </li> 
                        <li class="header__menu-item">
                            <a href="./html/index_infrastructure_en.html">Infrastructure</a>
                        </li> 
                        <li class="header__menu-item"> <!--пункт списка-->
                            <a href="./html/index_projects_en.html">Projects</a> <!--ссылка, пустая, поэтому ставим "#". Также здесь и дальше по проекту будем в текстах после предлогов, между цифрами и связанными с ними словами и в других местах, в которых текст не должен переноситься, ставить вместо пробела символ неразрывного пробела - "&nbsp;"-->
                        </li> 
                    </ul>
                    <ul class="header__language-list none_markers"> <!--открывающий тег списка десктопного меню. Добавим этому элементу классы, по которым будем отключать на мобильной и планшетной ширине-->
                        <li class="header__language-item "> <!--пункт списка-->
                            <a href="index.php">EN</a> <!--ссылка, пустая, поэтому ставим "#". Также здесь и дальше по проекту будем в текстах после предлогов, между цифрами и связанными с ними словами и в других местах, в которых текст не должен переноситься, ставить вместо пробела символ неразрывного пробела - "&nbsp;"-->
                        </li> 
                        <li class="header__language-item">
                            <a href="./html/index_home_ru.php">RU</a>
                        </li> 
                    </ul>
                </nav>
			</header>
			<main class="home__main">
                <div class="main__screen">
                    <div class="main__screen-info">
                        <div class="screen-info__info-block">
                            <h1 class="info-block__text">
                                TERRAN 1 
                            </h1> <!--абзац с информацией о приюте. Тоже добавим модификатор-->
                            <h1 class="info-block__text">
                                LAUNCH YOUR PAYLOAD
                            </h1> <!--абзац с информацией о приюте. Тоже добавим модификатор-->
                            <div class="info-block__button"> <!--оборачиваем кнопки в обертку, чтобы расположить их в ряд-->
                                <a href="./php/calculate_2.php" class="button-white">
                                    calculate price
                                </a> <!--кнопка. В коде пишем ссылкой, т.к. скорее всего это будет переход на другую страницу, которой пока нет в макете.-->
                                <a href="./php/newsletter.php" class="button-transparent">
                                    get media
                                </a> 
                                
                                <!-- <a href="https://www.youtube.com/watch?v=bzA0lIwh19c " class="button-white">
                                    watch launch 
                                </a> 
                                <a href="https://twitter.com/relativityspace/status/1646151884766429188?s=20" class="button-transparent">
                                    about  
                                </a>  -->
                            </div>
                        </div>
                    </div>
                    <div class="main__screen-image">
                        <a > 
                            <img src="./images/home/home__image-1.jpg" alt="home__image-1" >
                        </a>
                    </div>
                </div>
                <ul class="main__list none_markers"> <!--открывающий тег списка десктопного меню. Добавим этому элементу классы, по которым будем отключать на мобильной и планшетной ширине-->
                    <li class="main__list-item">
                        <div class ="main__list-text">
                            <a>
                                <h2>
                                    3D PRINTING ENTIRE ROCKETS
                                </h2>
                                <h3>
                                    TO BUILD THE FUTURE OF HUMANITY IN SPACE
                                </h3>
                                <p>
                                    Relativity is building the first autonomous rocket factory and launch services for satellites.
                                    We are disrupting 60 years of aerospace.
                                </p>
                                <ul>
                                    <li class="margin_markers">
                                        Reliability: 100x Fewer Parts
                                    </li>
                                    <li class="margin_markers">
                                        Speed: 10x Faster Production Time
                                    </li>
                                    <li class="margin_markers">
                                        Flexibility: No Fixed Tooling and a Simple Supply Chain
                                    </li>
                                    <li class="margin_markers">
                                        Optimization: Compounding Iteration Quality and Time Improvements
                                    </li>
                                </ul>
                            </a>
                        </div> 
                    </li> 
                    <li class="main__list-item"> <!--пункт списка-->
                        <a class="main__list-image main__list-image-position">
                            <img href="" src="./images/home/home__image-2.jpg" alt="home__image-2">
                        </a> 
                    </li> 
                    <li class="main__list-item">
                        <a class="main__list-image">
                            <img href="" src="./images/home/home__image-3.jpg" alt="home__image-3">
                        </a>
                    </li> 
                    <li class="main__list-item">
                        <div class ="main__list-text">
                            <a>
                                <h2>
                                    3D PRINTING ENTIRE ENGINES
                                </h2>
                                <h3>
                                    FROM RAW MATERIAL TO FLIGHT IN 60 DAYS
                                </h3>
                                <p>
                                    Terran 1 is the only medium payload launch vehicle engineered to adapt to the changing needs of satellite operators.
                                </p>
                                <ul>
                                    <li class="margin_markers">
                                        Launching up to 1,250 kg to Low Earth Orbit
                                    </li>
                                    <li class="margin_markers">
                                        Best-in-class payload fairing volume
                                    </li>
                                    <li class="margin_markers">
                                        100x fewer parts than traditional rockets
                                    </li>
                                    <li class="margin_markers">
                                        Entirely designed, built and flown in the United States
                                    </li>
                                </ul>
                            </a>
                        </div> 
                    </li> 
                    <li class="main__list-item">
                        <div class ="main__list-text">
                            <a>
                                <h2>
                                    THE AEROSPACE FACTORY OF THE FUTURE, NOW
                                </h2>
                                <h3>
                                    BUILDING HUMANITY’S MULTIPLANETARY FUTURE
                                </h3>
                                <p>
                                    Starting with rockets, our Stargate factory vertically integrates robotics, software, and patented 3D printing technologies to digitize manufacturing. Our proprietary process optimizes every aspect of aerospace development and enables faster, more frequent, and lower cost access to space.
                                </p>
                            </a>
                        </div> 
                    </li> 
                    <li class="main__list-item">
                        <a class="main__list-image">
                            <img href="" src="./images/home/home__image-4.jpg" alt="home__image-4">
                        </a>
                    </li> 
                    <li class="main__list-item"> <!--пункт списка-->
                        <a class="main__list-image main__list-image-position">
                            <img href="" src="./images/home/home__image-5.jpg" height="700px" alt="home__image-5">
                        </a> 
                    </li> 
                    <li class="main__list-item">
                        <div class ="main__list-text">
                            <a>
                                <h2>
                                    The First 3D Printed Rocket
                                </h2>
                                <h3>
                                    Terran 1 – the world's first 3D-printed rocket
                                </h3>
                                <p>
                                    Terran 1 on March 22, 2023, became the first methane fueled rocket in the West to reach space, well over the 100km Karman Line. Terran 1 also became the first nearly entirely 3D printed rocket to fly and prove 3D printing is viable by successfully passing Max-Q, main engine cut-off (MECO) and second stage separation – marking several historic milestones not just for the aerospace industry, but for humanity. 
                                </p>
                                <p>
                                    As a two-stage, 110ft. tall, 7.5 ft. wide, expendable rocket, Terran 1 is the largest 3D printed object to exist and to attempt orbital flight. Working towards its goal of being 95% 3D printed, Relativity’s first Terran 1 vehicle is 85% 3D printed by mass. Terran 1 has nine Aeon engines on its first stage, and one Aeon Vac on its second stage.
                                </p>
                                <p>
                                    Like its structure, all Relativity engines are 3D printed, and use liquid oxygen (LOX) and liquid natural gas (LNG), which are not only the best for rocket propulsion, but also for reusability, and the easiest to eventually transition to methane on Mars.
                                </p>
                            </a>
                        </div> 
                    </li> 
                    <li class="main__list-item">
                        <div class ="main__list-text">
                            <a>
                                <h2>
                                    MISSION OVERVIEW
                                </h2>
                                <p>
                                    Terran 1 Flight Article 
                                </p>
                                <ul>
                                    <li class="margin_markers">
                                        Height: 33.5 m / 110 ft
                                    </li>
                                    <li class="margin_markers">
                                        Diameter: 2.28 m / 7.5 ft
                                    </li>
                                    <li class="margin_markers">
                                        Mass (Dry): 9,280 kg / 20,458 lb 
                                    </li>
                                </ul>   
                                <p>
                                    Aeon Engines 
                                </p>
                                <ul>
                                    <li class="margin_markers">
                                        Propellant: LOX / LNG 
                                    </li>
                                    <li class="margin_markers">
                                        Thrust (Sea Level): 100,000 N / 23,000 lbf per engine
                                    </li>
                                    <li class="margin_markers">
                                        Thrust (Vac): 113,000 N / 25,400 lbf 
                                    </li>
                                </ul>
                                <p>
                                    Target Performance Capability 
                                </p>
                                <ul>
                                    <li class="margin_markers">
                                        Payload: 1,250 kg / 2756 lbs to LEO
                                    </li>
                                    <li class="margin_markers">
                                        Altitude: 500 km / 310 mi
                                    </li>
                                </ul>                      
                                <li class="main__list-item" style="display: flex;/*! align-content: center; */justify-content: center;">
                                    <video data-preserve-html-node="true" preload="auto" autoplay="" loop="" muted="" height="700">
                                        <source data-preserve-html-node="true" type="video/mp4" src="./videos/home/home__video-1.mp4">
                                    </video>
                                    <img data-preserve-html-node="true" src="./images/home/home__image-6.png" style="height:700px;display:inline;">
                                </li>
                            </a>
                        </div> 
                    </li> 
                </ul>
                <div class="conteiner">
                </div>
                
			</main>
        </div>
        <footer class="home__footer">
            <div class="footer__logo"> 
                <a href="index.php">
                    <img src="./images/Relativity_White_RGB_900px.png" width = "300px" alt="Relativity Space Logo">
                </a>
            </div>
            <div class="footer__menu">
                <ul class="footer__menu-list none_markers"> <!--открывающий тег списка десктопного меню. Добавим этому элементу классы, по которым будем отключать на мобильной и планшетной ширине-->
                    <li class="footer__menu-item">
                        <a href="./html/index_rockets_en.html">Rockets</a>
                    </li> 
                    <li class="footer__menu-item">
                        <a href="./html/index_engines_en.html">Engines</a>
                    </li> 
                    <li class="footer__menu-item">
                        <a href="./html/index_factory_en.html">Factory</a>
                    </li> 
                    <li class="footer__menu-item">
                        <a href="./html/index_infrastructure_en.html">Infrastructure</a>
                    </li> 
                    <li class="footer__menu-item"> <!--пункт списка-->
                        <a href="./html/index_projects_en.html">Projects</a> <!--ссылка, пустая, поэтому ставим "#". Также здесь и дальше по проекту будем в текстах после предлогов, между цифрами и связанными с ними словами и в других местах, в которых текст не должен переноситься, ставить вместо пробела символ неразрывного пробела - "&nbsp;"-->
                    </li> 
                </ul>
            </div>
            <div class="footer__socials-motto">
                <ul class="footer__socials-list none_markers"> <!--список соцсетей в футере-->
                    <li class="footer__socials-item"> <!--пункт меню-->
                        <a href="https://www.instagram.com/" class="footer__socials-link"> <!--ссылка-->
                            <svg width="auto" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <!--код svg-изображения иконки. Меняют цвет при наведении, поэтому снова добавляем кодом-->
                                <path d="M16.8503 0H7.14973C3.20735 0 0 3.20735 0 7.14973V16.8503C0 20.7926 3.20735 24 7.14973 24H16.8503C20.7926 24 24 20.7926 24 16.8503V7.14973C24 3.20735 20.7926 0 16.8503 0ZM21.5856 16.8503C21.5856 19.4655 19.4655 21.5856 16.8503 21.5856H7.14973C4.5345 21.5856 2.4144 19.4655 2.4144 16.8503V7.14973C2.4144 4.53446 4.5345 2.4144 7.14973 2.4144H16.8503C19.4655 2.4144 21.5856 4.53446 21.5856 7.14973V16.8503Z" fill="#444444"/>
                                <path d="M12 5.79297C8.57729 5.79297 5.79272 8.57754 5.79272 12.0002C5.79272 15.4228 8.57729 18.2074 12 18.2074C15.4227 18.2074 18.2072 15.4229 18.2072 12.0002C18.2072 8.57749 15.4227 5.79297 12 5.79297ZM12 15.7931C9.90523 15.7931 8.20712 14.095 8.20712 12.0002C8.20712 9.90547 9.90527 8.20737 12 8.20737C14.0947 8.20737 15.7928 9.90547 15.7928 12.0002C15.7928 14.0949 14.0947 15.7931 12 15.7931Z" fill="#444444"/>
                                <path d="M18.2193 7.32683C19.0407 7.32683 19.7066 6.6609 19.7066 5.83944C19.7066 5.01798 19.0407 4.35205 18.2193 4.35205C17.3978 4.35205 16.7319 5.01798 16.7319 5.83944C16.7319 6.6609 17.3978 7.32683 18.2193 7.32683Z" fill="#444444"/>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="https://vk.com/" class="footer__socials-link"> 
                            <svg width="auto" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_2_331" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#C4C4C4"/>
                                </mask>
                                <g mask="url(#mask0_2_331)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4493 5.77512C23.6161 5.21306 23.4493 4.80005 22.6553 4.80005H20.0297C19.3621 4.80005 19.0543 5.15683 18.8874 5.55025C18.8874 5.55025 17.5521 8.83829 15.6606 10.9741C15.0487 11.5923 14.7705 11.789 14.4367 11.789C14.2698 11.789 14.0282 11.5923 14.0282 11.0303V5.77512C14.0282 5.10065 13.8345 4.80005 13.2781 4.80005H9.15213C8.73494 4.80005 8.48403 5.11309 8.48403 5.40977C8.48403 6.04916 9.42974 6.19661 9.52722 7.99522V11.9015C9.52722 12.7579 9.37413 12.9132 9.04032 12.9132C8.15023 12.9132 5.98507 9.61049 4.70093 5.83131C4.44927 5.09676 4.19686 4.80005 3.52583 4.80005H0.900217C0.150043 4.80005 0 5.15683 0 5.55025C0 6.25284 0.89014 9.73759 4.14464 14.3464C6.31429 17.4939 9.37118 19.2 12.1528 19.2C13.8218 19.2 14.0283 18.8211 14.0283 18.1684V15.7895C14.0283 15.0316 14.1864 14.8804 14.7149 14.8804C15.1043 14.8804 15.7719 15.0771 17.3296 16.5946C19.1099 18.3932 19.4034 19.2 20.4047 19.2H23.0304C23.7805 19.2 24.1556 18.8211 23.9392 18.0733C23.7024 17.3279 22.8525 16.2466 21.7247 14.9647C21.1127 14.234 20.1947 13.4472 19.9165 13.0537C19.5271 12.5479 19.6384 12.323 19.9165 11.8734C19.9165 11.8734 23.1155 7.32074 23.4493 5.77512Z" fill="#444444"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="footer__socials-item">
                        <a href="https://web.telegram.org/k/" class="footer__socials-link"> 
                            <svg width="auto" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.orgверхней/2000/svg">
                                <mask id="mask0_2_334" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#C4C4C4"/>
                                </mask>
                                <g mask="url(#mask0_2_334)">
                                <path d="M23.5468 1.49689C23.1374 1.15345 22.4944 1.10431 21.8295 1.36837H21.8285C21.1292 1.64593 2.03537 9.74811 1.25808 10.0791C1.11671 10.1277 -0.118008 10.5835 0.00917513 11.5987C0.122712 12.514 1.11507 12.8931 1.23625 12.9368L6.09049 14.5811C6.41255 15.6417 7.59977 19.5545 7.86233 20.3905C8.02608 20.9116 8.293 21.5963 8.7608 21.7372C9.17128 21.8938 9.57957 21.7507 9.84376 21.5455L12.8116 18.8223L17.6025 22.5186L17.7166 22.5861C18.0419 22.7287 18.3536 22.8 18.6511 22.8C18.8809 22.8 19.1014 22.7573 19.3121 22.672C20.0299 22.3804 20.317 21.7038 20.347 21.6271L23.9256 3.22543C24.144 2.24263 23.8405 1.74259 23.5468 1.49689ZM10.3716 15.2388L8.73405 19.5589L7.0965 14.1588L19.6511 4.97882L10.3716 15.2388Z" fill="#444444"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
                <ul class="footer__motto-list none_markers">
                    <li class="footer__motto-item">
                        <a href="./html/index_projects_en.html">Building Humanity's Multiplanetary Future</a>
                    </li>
                </ul>
            </div>
            <?php
            $connection= mysqli_connect("relativity","root","7064");
            $db = mysqli_select_db($connection, 'relativity');
            
            if(isset($_POST['register']))
            {
                $first_name=$_POST['first_name'];
                $last_name=$_POST['last_name'];
                $company=$_POST['company'];
                $job_title=$_POST['job_title'];
                $email=$_POST['email'];
                $phone_number=$_POST['phone_number'];

                $query_1_2 = "INSERT INTO `first_name`(`first_name`) VALUES ('$first_name')";
                $query_run_1_2 = mysqli_query($connection,$query_1_2);
                $query_2_2 = "INSERT INTO `last_name`(`last_name`) VALUES ('$last_name')";
                $query_run_2_2 = mysqli_query($connection,$query_2_2);
                $query_3_2 = "INSERT INTO `company`(`company`) VALUES ('$company')";
                $query_run_3_2 = mysqli_query($connection,$query_3_2);
                $query_4_2 = "INSERT INTO `job_title`(`job_title`) VALUES ('$job_title')";
                $query_run_4_2 = mysqli_query($connection,$query_4_2);
                $query_5_2 = "INSERT INTO `email`(`email`) VALUES ('$email')";
                $query_run_5_2 = mysqli_query($connection,$query_5_2);
                $query_6_2 = "INSERT INTO `phone_number`(`phone_number`) VALUES ('$phone_number')";
                $query_run_6_2 = mysqli_query($connection,$query_6_2);
            }
            ?>
            
            <?php
            $connection= mysqli_connect("relativity","root","7064");
            $db = mysqli_select_db($connection, 'relativity');
            
            if(isset($_POST['subscribe']))
            {
                $email=$_POST['email'];
            
                $query_1_3 = "INSERT INTO `email`(`email`) VALUES ('$email')";
                $query_run_1_3 = mysqli_query($connection,$query_1_3); 
            }
            ?>
        </footer>
	</body>
</html>