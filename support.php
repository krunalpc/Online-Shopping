<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | About Us</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
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
                                <a href="business_industrial.php">Business & Industrial</a>
                            </li>
                            <li>
                                <a href="cellphone_accessories.php">Cellphone & Accessories</a>
                            </li>
                            <li>
                                <a href="clothing_shoe_accessories.php">Clothing, Shoe & Accessories</a>
                            </li>
                            <li>
                                <a href="consumer_electronics.php">Consumer Electronics</a>
                            </li>
                            <li>
                                <a href="health_beauty.php">Health & Beauty</a>
                            </li>
                            <li>
                                <a href="home_garden.php">Home & Garden</a>
                            </li>
                            <li>
                                <a href="sporting_goods.php">Sporting Goods</a>
                            </li>
                        </ul>
                    </li>   
                    <li>
                        <a href="support.php">Support</a>
                    </li>
                    <?php
					
						if(!isset($_SESSION['Display_Name']))
						{
							?>
                            <li>
                            	<a href="registration.php">Registration/Login</a>
                            </li>
                            <?php
						}
						else{
							?>
                            <li>
                            	<a href="logout.php">Log Out</a>
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
                <h1 class="page-header">Support
                    <small><font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></small>
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
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/support.jpg" alt="">
            </div>
            <div class="col-md-4">
                <h3>Product/Technical Support</h3>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:support@product-hub.com">support@product-hub.com</a>
                </p>
            </div>
            <br/>
            <br/>
            <div class="col-md-4">
            <h3>Online Product Support</h3>
                <p> 
                    <abbr><font color="#5D5959">For any questions regarding ProductHub Product, please contact us via email or by clicking</font></abbr><font color="#56ABB4"><a href="chat_client/support.php"> here</a></font>
                </p>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
