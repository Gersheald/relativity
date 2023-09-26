<?php
    //-------------------------------------register form---------------------------------------------
    $register_first_name=filter_var(trim($_POST['register_first_name']), FILTER_SANITIZE_STRING);
    $register_last_name=filter_var(trim($_POST['register_last_name']), FILTER_SANITIZE_STRING);
    $register_email=filter_var(trim($_POST['register_email']), FILTER_SANITIZE_STRING);
    $register_login=filter_var(trim($_POST['register_login']), FILTER_SANITIZE_STRING);
    $register_password=filter_var(trim($_POST['register_password']), FILTER_SANITIZE_STRING);
   
    //$mysql=new mysqli('relativity', 'relativity', '7064', 'relativity');
    //$mysql->query("INSERT INTO `register` (`first Sname`,`last name`,`email`,`login`,`password`) VALUES ('$first_name','$last_name','$email','$login','$password')");
    //$mysql->close();
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `register` (`register_first_name`,`register_last_name`,`register_email`,`register_login`,`register_password`) VALUES ('$register_first_name','$register_last_name','$register_email','$register_login','$register_password')");
    $DBConnect->close();


    //-------------------------------------sign in form---------------------------------------------
    $sign_in_login=filter_var(trim($_POST['sign_in_login']), FILTER_SANITIZE_STRING);
    $sign_in_password=filter_var(trim($_POST['sign_in_password']), FILTER_SANITIZE_STRING);
   
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `sign_in` (`sign_in_login`,`sign_in_password`) VALUES ('$sign_in_login','$sign_in_password')");
    $DBConnect->close();


    //-------------------------------------newsletter form---------------------------------------------
    $newsletter_email=filter_var(trim($_POST['newsletter_email']), FILTER_SANITIZE_STRING);
   
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `newsletter` (`newsletter_email`) VALUES ('$newsletter_email')");
    $DBConnect->close();


    //-------------------------------------calculate form---------------------------------------------
    $calculate_payload_type=filter_var(trim($_POST['calculate_payload_type']), FILTER_SANITIZE_STRING);
    $calculate_payload_weight=filter_var(trim($_POST['calculate_payload_weight']), FILTER_SANITIZE_STRING);
    $calculate_orbit_type=filter_var(trim($_POST['calculate_orbit_type']), FILTER_SANITIZE_STRING);
    $calculate_launch_date=filter_var(trim($_POST['calculate_launch_date']), FILTER_SANITIZE_STRING);
    $calculate_order_total=filter_var(trim($_POST['calculate_order_total']), FILTER_SANITIZE_STRING);
   
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `calculate` (`calculate_payload_type`,`calculate_payload_weight`,`calculate_orbit_type`,`calculate_launch_date`,`calculate_order_total`) VALUES ('$calculate_payload_type','$calculate_payload_weight','$calculate_orbit_type','$calculate_launch_date','$calculate_order_total')");
    $DBConnect->close();

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

        if($query_run_5)
        {
            echo '<script type="text/javascript"> alert("Your order is accepted, we are contact with you as soon as we can ") </script>';
           
        }
        else
        {
            echo '<script type="text/javascript"> alert("Your order is not accepted") </script>';
        }

    }
    
    //-----------------------------------test-----------------------------------------------
    $register_first_name=filter_var(trim($_POST['register_first_name']), FILTER_SANITIZE_STRING);
    $register_last_name=filter_var(trim($_POST['register_last_name']), FILTER_SANITIZE_STRING);
    $register_company=filter_var(trim($_POST['register_company']), FILTER_SANITIZE_STRING);
    $register_job_title=filter_var(trim($_POST['register_job_title']), FILTER_SANITIZE_STRING);
    $register_email=filter_var(trim($_POST['register_email']), FILTER_SANITIZE_STRING);
    $register_phone_number=filter_var(trim($_POST['register_phone_number']), FILTER_SANITIZE_STRING);
   
    
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `register` (`register_first_name`,`register_last_name`,`register_company`,`register_job_title`,`register_email`, `register_phone_number`) VALUES ('$register_first_name','$register_last_name','$register_company','$register_job_title','$register_email','$register_phone_number')");
    $DBConnect->close();
    
?>
    <form action="register.php" method="post">
        <button type="submit" class="btn btn-success" name="" >
            test
        </button>
        
    </form>
        <a class="btn btn-primary" href="register.php" role="button">Go back</a>
        <a class="btn btn-primary" href="../index.php" role="button">Go back</a>
    