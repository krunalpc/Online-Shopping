
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Admin Section</title>

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
                        <a href="#"><font color="#56ABB4">Admin Panel</font></a>
                    </li>
                    <li>
                        <a href="chat/support.php"><font color="#56ABB4">Client Support</font></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Insert</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Admin</li>
                </ol>
                <ol class="breadcrumb">
                    <li class="active">Admin Can Add Product From This Area</li>
                </ol>
            </div>
        </div>

<?php 
if(isset($_REQUEST['submit'])!='')
{
	$usr1 = $_REQUEST['admin'];
	$pwd1 = $_REQUEST['password'];
	
	if( $usr1 == 'Admin_Dean' && $pwd1 == 'Dean_12345' || $usr1== 'Admin_Derek' && $pwd1 == 'Derek_12345')
		{
			$admin = 1;
		}
		else
		{
			$admin = 0;
			echo "There is some problem with login credential";
		}
		
}

if( $admin == 1) {
	
?>
        <div class="row">

            <div class="container">

                <div  class="form">

                <font color="#5D5959"><h4>Add Product:</h4></font>
                    <form id="contactform" name="registration" method="post" action="admin_code.php"> 
                        
                        <br/>
                         
                        <p class="contact"><label for="SKU">SKU</label></p> 
                        <input type="text" name="SKU" value="" id="SKU" placeholder="Please Enter SKU" required="" tabindex="2" title="Please Enter SKU"required>
                        
                        <p class="contact"><label for="ProductName">ProductName</label></p> 
                        <input type="text" name="ProductName" value="" id="ProductName" placeholder="Please Enter ProductName" required="" tabindex="3" title="Please Enter ProductName"required>
                        
                        <p class="contact"><label for="ProductDescriptions">ProductDescriptions</label></p> 
                        <input type="text" name="ProductDescriptions" value="" id="ProductDescriptions" placeholder="Please EnterProductDescriptions" required="" tabindex="4" title="Please Enter ProductDescriptions"required>
                       
                        <p class="contact"><label for="SupplierID">SupplierID</label></p> 
                        <input type="text" name="SupplierID" value="" id="SupplierID" placeholder="Please Enter SupplierID" tabindex="5" title="Please Enter SupplierID">

                        <p class="contact"><label for="CategoryID">CategoryID</label></p> 
                        <select Name="CategoryID">
                          <option value="">Select Category</option>
                          <option value="1">Business & Industrial</option>
                          <option value="2">Cellphone & Accessories</option>
                          <option value="3">Clothing, Shoe & Accessories</option>
                          <option value="4">Consumer Electronics</option>
                          <option value="5">Health & Beauty</option>
                          <option value="6">Home & Garden</option>
                          <option value="7">Sporting Goods</option>
						</select>
						<br/>
                        <br/>

                        <p class="contact"><label for="Active">Active</label></p> 
                        <input type="text" name="Active" value="" id="Active" placeholder="Please Enter Active Information" tabindex="7" title="Please Enter SupplierID">
                        
                        <p class="contact"><label for="Available">Available</label></p> 
                        <input type="text" name="Available" value="" id="Available" placeholder="Please Enter Availablity" required="" tabindex="8" title="Please Enter CategoryID"required>

                        <p class="contact"><label for="QuantityPerUnit">QuantityPerUnit</label></p> 
                        <input type="text" name="QuantityPerUnit" value="" id="QuantityPerUnit" placeholder="Please Enter QuantityPerUnit" required="" tabindex="9" title="Please Enter QuantityPerUnit"required>
                       
                        <p class="contact"><label for="UnitPrice">UnitPrice</label></p> 
                        <input type="text" name="UnitPrice" value="" id="UnitPrice"  placeholder="Please Enter UnitPrice" required="" tabindex="10" title="Please Enter UnitPrice"required>
        
                        <p class="contact"><label for="MSRP">MSRP</label></p> 
                        <input type="text" name="MSRP" value="" id="MSRP"  placeholder="Please Enter MSRP" required="" tabindex="11" title="Please Enter MSRP"required>
                        
                        <p class="contact"><label for="AvailableSize">AvailableSize</label></p> 
                        <input type="text" name="AvailableSize" value=""  id="AvailableSize" placeholder="Please Enter AvailableSize" required="" tabindex="12" title="Please Enter AvailableSize"required>
                       
                        <p class="contact"><label for="AvailableColors">AvailableColors</label></p> 
                        <input type="text" name="AvailableColors" value="" id="AvailableColors" placeholder="Please Enter AvailableColors" required="" tabindex="13" title="Please Enter AvailableColors"required>
                        
                        <p class="contact"><label for="Size">Size</label></p> 
                        <input type="text" name="Size" value="" id="Size" placeholder="Please Enter Size" tabindex="14" title="Please Enter Size">
        
                        <p class="contact"><label for="Color">Color</label></p> 
                        <input type="text" name="Color" value="" id="Color" placeholder="Please Enter Color" required="" tabindex="15" title="Please Enter Color"required>
                        
                        <p class="contact"><label for="PicureID">PicureID</label></p> 
                        <input type="text" name="PicureID" value="" id="PicureID" placeholder="Please Enter PicureID" required="" tabindex="16" title="Please Enter PicureID"required>
                       
                        <p class="contact"><label for="Discount">Discount</label></p> 
                        <input type="text" name="Discount" value="" id="Discount"  placeholder="Please Enter Discount" required="" tabindex="17" title="Please Enter Discount"required>
        
                        <p class="contact"><label for="UnitsInStock">UnitsInStock</label></p> 
                        <input type="text" name="UnitsInStock" value="" id="UnitsInStock"  placeholder="Please Enter UnitsInStock" required="" tabindex="18" title="Please Enter UnitsInStock"required>
                        
                        <p class="contact"><label for="UnitsOnOrder">UnitsOnOrder</label></p> 
                        <input type="text" name="UnitsOnOrder" value=""  id="UnitsOnOrder" placeholder="Please Enter UnitsOnOrder" required="" tabindex="19" title="Please Enter UnitsOnOrder"required>
                       
                        <p class="contact"><label for="Weight">Weight</label></p> 
                        <input type="text" name="Weight" value="" id="Weight" placeholder="Please Enter Weight" required="" tabindex="20" title="Please Enter Weight"required>
                        
                        <p class="contact"><label for="Availability">Availability</label></p> 
                        <input type="text" name="Availability" value="" id="Availability" placeholder="Please Enter Availability" tabindex="21" title="Please Enter Availability">
                               
                        <p class="contact"><label for="Notes">Notes</label></p> 
                        <input type="text" name="Notes" value="" id="Notes"  placeholder="Please Enter Notes" required="" tabindex="24" title="Please Enter Notes"required>
                         
                        <input type="submit" name="submit2" value="Insert" tabindex="25">
                        
                </form> 

				<form action="insert.php" method="post" enctype="multipart/form-data">

                        <p class="contact">
                        <label for="Notes">Filename</label><br/>
                        <label for="Notes">Filename and PictureID should be the same</label>
                        </p> 
                        <input type="file" name="file" id="file"><br>
                        
                        <input type="submit" name="submit" value="Submit">
                        
                </form>

                </div>      
    
            </div>

        </div>
        
<?php 
}
?>

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