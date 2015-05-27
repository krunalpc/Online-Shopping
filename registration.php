
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Registration / Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
               <a class="navbar-brand" href="index.php"><font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="categories.php">Category 1</a>
                            </li>
                            <li>
                                <a href="categories.php">Category 2</a>
                            </li>
                            <li>
                                <a href="categories.php">Category 3</a>
                            </li>
                            <li>
                                <a href="categories.php">Category 4</a>
                            </li>
                            <li>
                                <a href="categories.php">Category 5</a>
                            </li>
                        </ul>
                    </li>                    
                    <?php
						if(isset($_SESSION['Display_firse']))
						{
							?>
                            <li>
                            	<a href="logout.php">Log Out</a>
                            </li>
                            <?php
						}
						else{
							?>
                            <li>
                            	<a href="registration.php">Registration/Login</a>
                            </li>
							<?php
						}
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registration
                    <small>Login</small>
                </h1>
                    <?php
						if(isset($_SESSION['Display_firse']))
						{
							?> 
                            <ol class="breadcrumb">
                                <li>
                                        <?php echo " Welcome ";?><font color="#56ABB4"><?php echo $fname1; ?> 
                                        </font> 
                                </li>
                            </ol>
                        <?php
                        }
                    ?>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Registration - Login</li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="container">
    
                <div  class="form">
                <font color="#5D5959"><h4>Login:</h4></font>
                    <form id="contactform_login" name="registration_login" method="post" action="registration_code.php"> 
                        
                        <p class="contact"><label for="name">email</label></p> 
                        <input type="text" name="email" value=""  id="email" placeholder="Please Enter email" required="" tabindex="1" required="" title="Please enter email"required>
                         
                        <p class="contact"><label for="email">Password</label></p> 
                        <input type="text" name="password" value="" id="pasword" placeholder="Please Enter Your password" required="" tabindex="2" title="Please Enter password"required>
                        
                         
                        <input type="submit" name="submit1" value="Login" tabindex="3">
                    </form> 
        
                </div>      
    
            </div>

        </div>

        <div class="row">

            <div class="container">
    
                <div  class="form">
                <font color="#5D5959"><h4>Registration:</h4></font>
                    <form id="contactform" name="registration" method="post" action="registration_code.php"> 
                        
                        <p class="contact"><label for="name">UserID</label></p> 
                        <input type="text" name="UserID" value=""  id="name" placeholder="Please Enter UserID" required="" tabindex="4" required="" title="Please enter UserID"required>
                         
                        <p class="contact"><label for="email">FirstName</label></p> 
                        <input type="text" name="firstName" value="" id="firstName" placeholder="Please Enter Your First Name" required="" tabindex="5" title="Please Enter Your First Name"required>
                        
                        <p class="contact"><label for="username">LastName</label></p> 
                        <input type="text" name="lastName" value="" id="LastName" placeholder="Please Enter Your Last Name" required="" tabindex="6" title="Please Enter Your Last Name"required>
                        
                        <p class="contact"><label for="username">Address1</label></p> 
                        <input type="text" name="address1" value="" id="address1" placeholder="Please Enter Your Address" required="" tabindex="7" title="Please Enter Your Address"required>
                       
                        <p class="contact"><label for="username">Address2</label></p> 
                        <input type="text" name="address2" value="" id="address2" placeholder="Please Enter Your Address" tabindex="8" title="Please Enter Your Address">
                        
                        <p class="contact"><label for="username">City</label></p> 
                        <input type="text" name="city" value="" id="city" placeholder="Please Enter City" required="" tabindex="9" title="Please Enter City"required>
                        
                        <p class="contact"><label for="username">State</label></p> 
                        <input type="text" name="state" value="" id="state" placeholder="Please Enter State" required="" tabindex="10" title="Please Enter State"required>
                       
                        <p class="contact"><label for="username">Zip</label></p> 
                        <input type="text" name="zip" value="" id="zip"  placeholder="Please Enter Zip" required="" tabindex="11" title="Please Enter Zip"required>
        
                        <p class="contact"><label for="username">Phone</label></p> 
                        <input type="text" name="phone" value="" id="phone"  placeholder="Please Enter Phone Number" required="" tabindex="12" title="Please Enter Zip"required>
                        
                        <p class="contact"><label for="username">Email</label></p> 
                        <input type="text" name="email" value=""  id="email" placeholder="Please Enter email Address" required="" tabindex="13" title="Please Enter email Address"required>
                       
                        <p class="contact"><label for="username">Shipping Address 1</label></p> 
                        <input type="text" name="shipping_address1" value="" id="shipping_address1" placeholder="Please Enter Your Shipping Address" required="" tabindex="14" title="Please Enter Your Shipping Address"required>
                        
                        <p class="contact"><label for="username">Shipping Address 2</label></p> 
                        <input type="text" name="shipping_address2" value="" id="shipping_address2" placeholder="Please Enter Your Shipping Address" tabindex="15" title="Please Enter Your Shipping Address">
        
                        <p class="contact"><label for="username">Shipping City</label></p> 
                        <input type="text" name="shipping_city" value="" id="shipping_city" placeholder="Please Enter Shipping City" required="" tabindex="16" title="Please Enter Shipping City"required>
                        
                        <p class="contact"><label for="username">Shipping State</label></p> 
                        <input type="text" name="shipping_state" value="" id="shipping_state" placeholder="Please Enter Shipping State" required="" tabindex="17" title="Please Enter Shipping State"required>
                       
                        <p class="contact"><label for="username">Shipping Zip</label></p> 
                        <input type="text" name="shipping_zip" value="" id="shipping_zip"  placeholder="Please Enter Shipping Zip" required="" tabindex="18" title="Please Enter Shipping Zip"required>
        
                        <p class="contact"><label for="username">PASSWORD</label></p> 
                        <input type="password" name="password" value="" id="password" placeholder="Please Enter Password" tabindex="19" required="" title="Please Enter Password"required>
        
                        <p class="contact"><label for="username">RE-PASSWORD</label></p> 
                        <input type="password" name="repassword" value="" id="repassword" placeholder="Please Enter Re-Password" tabindex="20" required="" title="Please Enter Re-Password"required>
                         
                        <input type="submit" name="submit" value="Register" tabindex="21">
                </form> 
        
                </div>      
    
            </div>

        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></p>
                </div>
            </div>
        </footer>

    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>