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
                <h1 class="page-header">About
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

        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/about.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>About <font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></h2>
                <p>This is a B2C (business to Customer) plan and the main idea of starting this business is to both try to eliminate intermediate retailers which will reduce the profit of the sail by dividing it into too many beneficiaries and also attract more customers by online marketing and targeted marketing.</p>
                <p>This approach allows us to reduce the final price for customers and still have enough (and even more and more) profit since reducing price will end up in increasing number of customers, orders and transactions.</p>
                <p>Employing customer friendly support (both technical and shopping support) and also designing a user friendly User Interface which eases the usage of the site will help attracting more customers and more important keeping customers as the regular buyers from our website.</p>
            </div>
            <div class="col-md-4">
                <p> 
                    <abbr title="Email">E</abbr>: <a href="mailto:admin@product-hub.com">admin@product-hub.com</a>
                </p>
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
