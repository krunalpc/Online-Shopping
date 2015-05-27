<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Categories</title>

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
        
	<?php
    include('connect_product.php');
    
    //$sql = "SELECT PicureID, ProductName, ProductDescriptions FROM products where CategoryID = 3 ORDER BY ProductID DESC";
    $sql = "call GetProductCat3()";
    //$result = mysqli_query($conn, $sql);
    $result = $conn->query($sql) or die("query failed");
    ?> 
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Clothing, Shoe and Accessories</li>
                </ol>
            </div>
        </div>
        
        <div class="row">

		<?php
        if ($result->num_rows > 0){
             while($row = $result->fetch_assoc()) {
        ?>
        
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="<?php echo $row['PicureID']; ?>" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html"><?php echo $row['ProductName']; ?></a>
                </h3>
                <p><?php echo $row['ProductDescriptions']; ?></p>
            </div>
            
			 <?php      }
            } else {
                 echo "0 results";
            }
            $conn->close();
            ?>
           
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>