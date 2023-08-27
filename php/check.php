<?php
    $first_name=filter_var(trim($_POST['first_name']), FILTER_SANITIZE_STRING);
    $last_name=filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
    $email=filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password=filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
   
    //$mysql=new mysqli('relativity', 'relativity', '7064', 'relativity');
    //$mysql->query("INSERT INTO `register` (`first name`,`last name`,`email`,`login`,`password`) VALUES ('$first_name','$last_name','$email','$login','$password')");
    //$mysql->close();
    $DBConnect = new mysqli("relativity","root","7064","relativity");
    $DBConnect->query("INSERT INTO `register` (`first_name`,`last_name`,`email`,`login`,`password`) VALUES ('$first_name','$last_name','$email','$login','$password')");
    $DBConnect->close();
    
?>