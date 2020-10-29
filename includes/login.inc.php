<?php
    if(isset($_POST['loginBtn'])){
     
        require ("../config.php");
        
        $username = $_POST["uid"];
        $password = $_POST["pwd"];
   
        if (empty($username) || empty($password)){
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else {
           $query = "SELECT * FROM agency WHERE uidusers = '".$username."' AND pwdusers = '".$password."'";
           $result = pg_query($conn, $query);

           if (!$result) {
               header("Location: ../login.php?error=wrongidorpassword");
               exit();
           }
           else {
               session_start();
               $_SESSION['logged'] = true;

               header("Location: ../index.php?login=success");
               exit();
           }
        }
    }

    else{
        header("Location: ../index.php");
        exit();
    }
