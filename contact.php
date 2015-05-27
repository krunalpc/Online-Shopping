<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Contact Us</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<script>
	function initialize()
	{
	  var mapProp = {
		center: new google.maps.LatLng(42.312449,-71.035905),
		zoom:14,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	
	function loadScript()
	{
	  var script = document.createElement("script");
	  script.type = "text/javascript";
	  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false&callback=initialize";
	  document.body.appendChild(script);
	}
	
	window.onload = loadScript;
	</script>


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
                <h1 class="page-header">Contact
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
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">

                <div id="googleMap" style="width:100%;height:400px;"></div>
                
            </div>
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    100 Morrissey Blvd,<br> Boston, MA 02125<br>
                </p>
                <p> 
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p>
                    <abbr title="Email">E</abbr>: <a href="mailto:contact@product-hub.com">contact@product-hub.com</a>
                </p>
                <p> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/umassboston"><img src="images/1416625844_social_facebook_box_blue.png"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/edu/university-of-massachusetts-boston-18528"><img src="images/1416625867_Linkedin.png"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/umassboston"><img src="images/1416625885_f-twitter_256-16.png"></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+umassboston/posts"><img src="images/1416625938_square-google-plus-16.png"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Product/Technical Support</h3>
                <p>
                    <abbr title="Email">E</abbr>: <a href="mailto:support@product-hub.com">support@product-hub.com</a>
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
