<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- jquery mobile mobile -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

<!-- Start of first page -->
<div data-role="page" id="foo">

    <div data-role="header" data-theme="c">
        <div class="head-container">
            <img src="./images/logo/ATN-logo-0FCFF3C433-seeklogo.com.png" style="width:8%;" alt="error">
            <h1>Index Home Page</h1>
        </div>
                <div data-role="navbar" data-grid="d">
                    <ul>
                        <li><a href="#foo" class="ui-btn-active">Home</a></li>
                        <li><a href="./product.php" data-ajax="false">Product</a></li>
                        <li><a href="./order.php" data-ajax="false">Order</a></li>
                       
                        <?php
                            if ($_SESSION['logged']){
                                
                                if (isset($_SESSION['logged'])){
                                    echo'
                                    <form class="logout-pos" action="./includes/logout.inc.php" method="post" data-ajax="false">
                                    <button class="" type="submit">log out</button>
                                    </form>  
                                    ';
                                  }
                            }
                            else {
                                echo ' <li><a href="#bar">Register</a></li>
                                <li style="position:relative; bottom:18px;"><a href="#login">Login</a></li> 
                                ';
                            }
                        ?>
                        
                        
                    </ul>
                </div>
                
    </div>

<!-- end header -->

<!-- main -->
	<div role="main" class="ui-content">
        <div class ="content">
                <div class ="left">
                    <p style="text-align: center; color: #000; background: gray;padding: 10px;">List Product</p>
                    <div class="productlist">
                        <ul>
                        <li style="padding: 20px;"><a href="#">Animal Toy</a></li>
                        <li style="padding: 20px;"><a href="#">Doll</a></li>
                        <li style="padding: 20px;"><a href="#">Lego Factory</a></li>
                        <li style="padding: 20px;"><a href="#">Yugi Desk</a></li>
                    </ul>
                    </div>
                </div>
                <div class ="right" style="height:500px;">
                        <p style="text-align: center; color: #000; background: gray;padding: 10px;">Product Best Review</p>
                        <div id="img-container">
                            <img src="./images/index/1.jpg" alt="error">
                        </div>
                
                </div>
        
        
        </div><!-- /content -->
</div>
	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
<!-- end main 1 -->


<!-- Start of 2nd PAGE -->
<div data-role="page" id="bar">

<div data-role="header" data-theme="c">
        <div class="head-container">
            <img src="./images/logo/ATN-logo-0FCFF3C433-seeklogo.com.png" style="width:8%;" alt="error">
            <h1>Index Home Page</h1>
        </div>
                <div data-role="navbar" data-grid="d">
                    <ul>
                        <li><a href="#foo">Home</a></li>
                        <li><a href="./product.php" data-ajax="false">Product</a></li>
                        <li><a href="./order.php" data-ajax="false">Order</a></li>
                       
                        <?php
                            if ($_SESSION['logged']){
                                
                                if (isset($_SESSION['logged'])){
                                    echo'
                                    <form class="logout-pos" action="./includes/logout.inc.php" method="post" data-ajax="false">
                                    <button class="" type="submit">log out</button>
                                    </form>  
                                    ';
                                  }
                            }
                            else {
                                echo ' <li><a href="#bar"  class="ui-btn-active">Register</a></li>
                                <li style="position:relative; bottom:18px;"><a href="#login">Login</a></li> 
                                ';
                            }
                        ?>
                        
                        
                    </ul>
                </div>
                
    </div>
    <!-- end 2nd header(Register) -->

	<div role="main" class="ui-content">
    <!-- right content form -->
        <div class="img-container" style="width:50%; float:left;">
            <img src="./images/login/31.jpg" alt="error">
        </div>
		<div class="form-container">
        <h5>Registration Form</h5> 
        <form action="./includes/register.inc.php" method="post" target="_self">
            <input type="text" name="uid"  placeholder="Username">  
            <input type="text" name="email"  placeholder="Email">
            <input type="password" name="pwd"  placeholder="Password">
            <input type="password" name="pwd-rp" placeholder="Repeat Password"> 
	<button class="btn" name="signupBtn">Register</button>	
        </form>
	 	
        </div>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
<!-- end registration -->

<!-- PAGE 3 login -->
<div data-role="page" id="login">

<div data-role="header" data-theme="c">
        <div class="head-container">
            <img src="./images/logo/ATN-logo-0FCFF3C433-seeklogo.com.png" style="width:8%;" alt="error">
            <h1>Index Home Page</h1>
        </div>
                <div data-role="navbar" data-grid="d">
                    <ul>
                        <li><a href="#foo">Home</a></li>
                        <li><a href="./product.php" data-ajax="false">Product</a></li>
                        <li><a href="./order.php" data-ajax="false">Order</a></li>
                       
                        <?php
                            if ($_SESSION['logged']){
                                
                                if (isset($_SESSION['logged'])){
                                    echo'
                                    <form class="logout-pos" action="./includes/logout.inc.php" method="post" data-ajax="false">
                                    <button class="" type="submit">log out</button>
                                    </form>  
                                    ';
                                  }
                            }
                            else {
                                echo ' <li><a href="#bar">Register</a></li>
                                <li style="position:relative; bottom:18px;"><a href="#login" class="ui-btn-active">Login</a></li> 
                                ';
                            }
                        ?>
                        
                        
                    </ul>
                </div>
                
    </div>
    <!-- end 3rd header(Login) -->

	<div role="main" class="ui-content">
    <!-- right content form -->
        <div class="img-container" style="width:50%; float:left;">
            <img src="./images/login/31.jpg" alt="error">
        </div>
		<div class="form-container">
        <h5>Login Form</h5> 
        <form action="./includes/login.inc.php" method="post" target="_self">
            <input type="text" name="uid"  placeholder="Username">  
            <input type="password" name="pwd"  placeholder="Password">
	<button class="btn" name="loginBtn">Login</button>	
        </form>
	 	
        </div>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->

<!-- order PAGE 4-->
<div data-role="page" id="order">

<div data-role="header" data-theme="c">
        <div class="head-container">
            <img src="./images/logo/ATN-logo-0FCFF3C433-seeklogo.com.png" style="width:8%;" alt="error">
            <h1>Index Home Page</h1>
        </div>
                <div data-role="navbar" data-grid="d">
                    <ul>
                        <li><a href="#foo">Home</a></li>
                        <li><a href="./product.php" data-ajax="false">Product</a></li>
                        <li><a href="./order.php" data-ajax="false" class="ui-btn-active" >Order</a></li>
                       
                        <?php
                            if ($_SESSION['logged']){
                                
                                if (isset($_SESSION['logged'])){
                                    echo'
                                    <form class="logout-pos" action="./includes/logout.inc.php" method="post" data-ajax="false">
                                    <button class="" type="submit">log out</button>
                                    </form>  
                                    ';
                                  }
                            }
                            else {
                                echo ' <li><a href="#bar">Register</a></li>
                                <li style="position:relative; bottom:18px;"><a href="#login">Login</a></li> 
                                ';
                            }
                        ?>
                        
                        
                    </ul>
                </div>
                
    </div>
    <!-- end 4th header(ORDER) -->

	<div role="main" class="ui-content">
    <!-- right content form -->
        <div class="ui-grid-c">
                <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:60px">
                            
                </div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:60px">Block B</div></div>
                <div class="ui-block-c"><div class="ui-bar ui-bar-a" style="height:60px">Block C</div></div>
                <div class="ui-block-d"><div class="ui-bar ui-bar-a" style="height:60px">Block D</div></div>
        </div><!-- /grid-c -->
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- script -->
<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>    
</body>
</html>
