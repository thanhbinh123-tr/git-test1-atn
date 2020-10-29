<?php
    if(isset($_POST['signupBtn'])){
       require ("../config.php");

       $username = $_POST['uid'];
       $email = $_POST['email'];
       $password = $_POST['pwd'];
       $repeat_password = $_POST['pwd-rp'];

       if(empty($username) || empty($email)||empty($password) || empty($repeat_password)){
           header("Location: ../index.php#bar?error=emptyfields&uid=".$username."&email=".$email."&pwd=".$pwd."&rppass=".$repeat_password);
           exit();
       }
       else if(!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../index.php#bar?error=wrongmail");
       }
       else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location: ../index.php#bar?error=wrongmail&uid");
        exit();
       }
       else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../index.php#bar?error=wronguids&uid");
        exit();
       }
       else if($password !== $repeat_password){
        header("Location: ../index.php#bar?error=wrongpassword");
        exit();
       }
       else{
            $query = "INSERT INTO agency (uidUsers, emailUsers, pwdUsers) VALUES ('".$username."','".$email."', '".$password."')";
            $result = pg_query($conn,$query);

            header("Location: ../index.php");
            exit();
        }
    }
    else{
        header("Location: ../index.php");
        exit();
    }
?>
