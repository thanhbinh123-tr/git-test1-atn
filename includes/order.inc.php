<?php
    if(isset($_POST['orderSubmit'])){
        require ('../config.php');
     if (!$conn) {
        echo "<center>";
        die('Could Not Connect: ' . mysql_error());
        echo "</center>";
    }
    $searchidupd = $_POST['searchingid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $bill1 = $_POST['billing1'];
    $bill2 = $_POST['billing2'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['select-country'];
    $phonenum = $_POST['phonenum'];
    
        $sqlsave = "INSERT INTO orderr (firstName, lastName, billingAddress, billingAddress2, city, zipcode, country, phoneNumber) 
        VALUES ('".$firstname."','".$lastname."','".$bill1."','".$bill2."','".$city."','".$zipcode."','".$country."','".$phonenum."');";
        $resultsave = pg_query($conn,$sqlsave);
        
        

        header("Location: ../order.php?idsr= ".$searchidupd);
        exit();
        }
        else if(isset($_POST['updateBtn'])){

            require ("../config.php");

            $searchidupd = $_POST['searchingid'];

             //declear variable
             $firstnameupd = $_POST['firstname'];
             $lastnameupd = $_POST['lastname'];
             $bill1upd = $_POST['billing1'];
             $bill2upd = $_POST['billing2'];
             $cityupd = $_POST['city'];
             $zipcodeupd = $_POST['zipcode'];
             $countryupd = $_POST['select-country'];
             $phonenumupd = $_POST['phonenum'];
           
             //declear variable
    
            $sqlinfo = "UPDATE orderr SET firstName = '".$firstnameupd."', lastName = '".$lastnameupd."',
            billingAddress = '".$bill1upd."', billingAddress2 = '".$bill2upd."', city = '".$cityupd."', 
            zipcode = '".$zipcodeupd."', country = '".$countryupd."', phoneNumber = '".$phonenumupd."' 
            WHERE orderID = '".$searchidupd."';"; 
            
            $resultinfo = pg_query($conn,$sqlinfo);
            header("Location: ../order.php?insert=success");
             exit();
        }
        else if(isset($_POST['deteleBtn'])){

            require ("../config.php");

            $searchidupd = $_POST['searchingid'];

            echo '<h1> haha'.$searchidupd .'</h1>';
           
             //declear variable
    
            $sqldelete = "DELETE FROM orderr WHERE orderID = '".$searchidupd."';";
            $resultdelete = pg_query($conn,$sqldelete);
            
            header("Location: ../order.php?insert=success");
            exit();
        }

    else {
        header('Location: ../index.php');
        exit();
    }
?>
