<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Categories</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
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
<!--                    http://www.w3schools.com/php/showphpfile.asp?filename=demo_db_select_oo_table                    
-->                    <?php
						if($set != 1)
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Krunal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ProductName, ProductDescriptions FROM products where CategoryID = 1";
//$result = mysqli_query($conn, $sql);
$result = $conn->query($sql) or die("query failed");
?> 
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Three Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Three Column Portfolio</li>
                </ol>
            </div>
        </div>
        
        <div class="row">

		<?php
        if ($result->num_rows > 0){
             // output data of each row
             $row = $result->fetch_assoc() or die("failed");
             while($row = $result->fetch_assoc()) {
        ?>
        
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
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
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
