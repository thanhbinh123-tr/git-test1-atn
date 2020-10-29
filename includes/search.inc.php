<?php
    if(isset($_POST['searchBtn'])){

        require ("../config.php");

        $searchid = $_POST['searchid'];
        $sql1= "SELECT * FROM orderr WHERE orderID = '".$searchid."'";
        $result1=pg_query($conn,$sql1);
        while($row =pg_fetch_assoc($result1)){
            $printfirst = $row['firstname'];
        }
            
        header("Location: ../order.php?where&firstname=".$printfirst);
        exit();
    }
    else {
        header("Location: ../index.php?error");
    }
?>