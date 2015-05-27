<?php

	session_start();
	
	$Display = $_SESSION['Display_Name']; 
	$set = $_SESSION['dis_sesion'];
	$fname1 = $_SESSION['Display_firse'];

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Product Hub</title>

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

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(images/1900/1.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/1900/2.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/1900/3.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/1900/4.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/1900/5.jpg);"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                               
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
            
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recently added product</h2>
            </div>
  
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat1";
        $result = $conn->query($sql) or die("query failed");
        
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
            
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat2";
        $result = $conn->query($sql) or die("query failed");
        
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
            
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat4";
        $result = $conn->query($sql) or die("query failed");
        
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
            
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat5";
        $result = $conn->query($sql) or die("query failed");
        
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
            
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat6";
        $result = $conn->query($sql) or die("query failed");
        
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
        
		<?php
        include('connect_product.php');
        
        $sql = "call GetLatestProductCat3";
        $result = $conn->query($sql) or die("query failed");
        
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
                    <p>Copyright &copy; <font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></p>
                </div>
            </div>
        </footer>

    </div>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 3000 
    })
    </script>

</body>

</html>