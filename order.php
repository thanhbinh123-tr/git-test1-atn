<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <!-- bs css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- end bs css -->
    <!-- custom css -->
    <link rel="stylesheet" href="./css/order.css">
    <!-- script -->
    
</head>
<body>
<?php
    if (isset($_POST['searchBtn'])){

        require ("./config.php");
        $searchid = $_POST['searchid'];
        
        $sqlquery = "SELECT * FROM orderr WHERE orderID = '".$searchid."'";
        $result1 = pg_query($conn, $sqlquery);
        $result2 = pg_fetch_assoc($result1);

        
        $sqlproduct ="SELECT * FROM Product WHERE productID = '3'";
        $resultproduct = pg_query($conn, $sqlproduct);
        $resultproduct1 = pg_fetch_assoc($resultproduct);
        
        echo '<div class="container">
        <div class="jumbotron">
            <h1>Order Form</h1>
        </div>
        <div class="w-50 d-inline-block">
            <form action="./includes/order.inc.php" method="post">
            <input type="hidden" name="searchingid" value="'.$searchid.'">
            <div class="form-group">
                <div class="name-info info-margin">
                    <span class="w-50 d-inline-block">
                        <label for="firstname float-left" >First name</label>
                        <input type="name" class="form-control w-50 pr-3" name="firstname" value="'.$result2['firstname'].'" >
                    </span>
                    <span class="w-50 d-inline-block float-right">
                        <label for="lastname" >Last name</label>
                        <input type="name" class="form-control w-50" name="lastname" value="'.$result2['lastname'].'"> 
                    </span>   
                </div>
                <div class="info-margin">
                    <label for="billing1" >Billing address</label>
                    <input type="text" class="form-control" name="billing1" value="'.$result2['billingaddress'].'">
                </div>
            
                <div class="info-margin">
                    <label for="billing2" >Billing address, line 2</label>
                    <input type="text" class="form-control" name="billing2" value="'.$result2['billingaddress2'].'" >
                </div>
                
                <div class="info-margin">
                    <label for="city" >City</label>
                    <input type="text" class="form-control" name="city" value="'.$result2['city'].'">
                </div>
                
                <div class="info-margin">
                    <label for="zipcode" >Zip or postal code</label>
                    <input type="text" class="form-control" name="zipcode" value="'.$result2['zipcode'].'">
                </div>
                
                <div class="d-block info-margin">
                <label for="countryname" >Country</label>
                <select name="select-country">
                    <option value="'.$result2['country'].'" selected>'.$result2['country'].'</option>
                    <option value="VN">Viet Nam</option>
                    <option value="SINGAPORE">Singapore</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Africa">Africa</option>
                </select>
                </div>
                <div class="info-margin">
                    <label for="phonenum" >Phone Number</label>
                    <input type="text" class1="form-control" name="phonenum" value="'.$result2['phonenumber'].'">
                </div>
            
        </div>

        <!-- confirm btn -->
        <div style="text-align: end;">
        <button type="submit" class="btn btn-primary" name="orderSubmit">Submit</button>
        <button class="btn btn-danger mt-1" name="updateBtn">Update</button>
        <button class="btn btn-warning mt-1" name="deteleBtn">Delete</button>
        <button class="btn btn-secondary mt-1" type="submit">Cancel</button>
        </div>
            <div class="product-container">
            <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">IMG</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">purchase</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">'.$resultproduct1["productid"].'</th>
                <td> <img width="150px" height="150px" src="'.$resultproduct1['imagesurl'].'"></td>
                <th>'.$resultproduct1["price"].'</th>
                <th>'.$resultproduct1["description"].'</th>
                <th><button type="submit" class="btn btn-primary" name="purchaseBTN">Purchase</button></th>
              </tr>
            </tbody>
          </table>
            </div>
        </form>
        </div>
        <!-- search function -->
        <!-- info and button search -->
        <div class="w-50 d-inline-block float-right ">

        <div class="search-id">
            <form action="./order.php" method="post">
                <label for="searchid float-left" >Order ID</label>
                <input type="text" class="form-control w-50 pr-3" name="searchid" value="'.$searchid.'">
                <button class="btn btn-primary mt-1" name="searchBtn">search</button>
            </form>   
        </div>
        
        
        </div>
    </div>';
       
    }
    else{
        require ("./config.php");
        $sqlproduct1 ="SELECT * FROM Product WHERE productID = '3'";
        $resultproduct2 = pg_query($conn, $sqlproduct1);
        $resultproduct3 = pg_fetch_assoc($resultproduct2);

        echo '<div class="container">
        <div class="jumbotron">
            <h1>Order Form</h1>
        </div>
        <div class="w-50 d-inline-block">
            <form action="./includes/order.inc.php" method="post">
        
            <div class="form-group">
                <div class="name-info info-margin">
                    <span class="w-50 d-inline-block">
                        <label for="firstname float-left" >First name</label>
                        <input type="name" class="form-control w-50 pr-3" name="firstname">
                    </span>
                    <span class="w-50 d-inline-block float-right">
                        <label for="lastname" >Last name</label>
                        <input type="name" class="form-control w-50" name="lastname"> 
                    </span>   
                </div>
                <div class="info-margin">
                    <label for="billing1" >Billing address</label>
                    <input type="text" class="form-control" name="billing1">
                </div>
            
                <div class="info-margin">
                    <label for="billing2" >Billing address, line 2</label>
                    <input type="text" class="form-control" name="billing2"  >
                </div>
                
                <div class="info-margin">
                    <label for="city" >City</label>
                    <input type="text" class="form-control" name="city">
                </div>
                
                <div class="info-margin">
                    <label for="zipcode" >Zip or postal code</label>
                    <input type="text" class="form-control" name="zipcode">
                </div>
                
                <div class="d-block info-margin">
                <label for="countryname" >Country</label>
                <select name="select-country">
                <option value="VN">Viet Nam</option>
                <option value="SINGAPORE">Singapore</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
                <option value="Africa">Africa</option>
                </select>
                </div>
                <div class="info-margin">
                    <label for="phonenum" >Phone Number</label>
                    <input type="text" class="form-control" name="phonenum">
                </div>
            
        </div>
        <div class="product-container">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">IMG</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">purchase</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">'.$resultproduct3["productid"].'</th>
            <td> <img width="150px" height="150px" src="'.$resultproduct3['imagesurl'].'"></td>
            <th>'.$resultproduct3["price"].'</th>
            <th>'.$resultproduct3["description"].'</th>
            <th><button type="submit" class="btn btn-primary" name="purchaseBTN">Purchase</button></th>
          </tr>
        </tbody>
      </table>
        </div>
        <!-- confirm btn -->
        <div style="text-align: end;">
        <button type="submit" class="btn btn-primary" name="orderSubmit">Submit</button>
        </div>
        </form>
        </div>
        <!-- search function -->
        <!-- info and button search -->
        <div class="w-50 d-inline-block float-right ">

        <div class="search-id">
            <form action="./order.php" method="post">
                <label for="searchid float-left" >Order ID</label>
                <input type="text" class="form-control w-50 pr-3" name="searchid" >
                <button class="btn btn-primary mt-1" name="searchBtn">search</button>
            </form>  
        </div>
        
        
        </div>
    </div>';
        
       
}
?>
    
     <!-- bs script  -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    <!-- SCRIPT END asd-->
</body>
</html>
