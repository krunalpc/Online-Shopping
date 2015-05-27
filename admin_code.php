<?php     

//include connect.php page for database connection

$hostname="localhost"; //local server name default localhost
$username="producthub";  //mysql username default is root.
$password="mohammad123";       //blank if no password is set for mysql.
$database="producth_main";  //database name which you created


$con=mysql_connect($hostname,$username,$password);
if(! $con)
	{
	die('Connection Failed'.mysql_error());
	}

mysql_select_db($database,$con);

//include('connect.php');

Image_ID, Image_Name, Image_URL, Image_Information, Image_Location, Admin_Name, Date, Note

if(isset($_REQUEST['submit2']))
{
	//$categories = $_REQUEST['categories'];
	//$ProductID = $_REQUEST['ProductID'];
	$SKU = $_REQUEST['SKU'];
	$ProductName = $_REQUEST['ProductName'];
	$ProductDescriptions = $_REQUEST['ProductDescriptions'];
	$SupplierID = $_REQUEST['SupplierID'];
	$CategoryID = $_REQUEST['CategoryID'];
	$Active = $_REQUEST['Active'];
	$Available = $_REQUEST['Available'];
	$QuantityPerUnit = $_REQUEST['QuantityPerUnit'];
	$UnitPrice = $_REQUEST['UnitPrice'];
	$MSRP = $_REQUEST['MSRP'];
	$AvailableSize = $_REQUEST['AvailableSize'];
	$AvailableColors = $_REQUEST['AvailableColors'];
	$Size = $_REQUEST['Size'];
	$Color = $_REQUEST['Color'];
	$PicureID = $_REQUEST['PicureID'];
	$Discount = $_REQUEST['Discount'];
	$UnitsInStock = $_REQUEST['UnitsInStock'];
	$UnitsOnOrder = $_REQUEST['UnitsOnOrder'];
	$Weight = $_REQUEST['Weight'];
	$Availability = $_REQUEST['Availability'];
	//$Ranking = $_REQUEST['Ranking'];
	//$Reviews = $_REQUEST['Reviews'];
	$Notes = $_REQUEST['Notes'];
	if($SKU=='' || $ProductName=='' || $ProductDescriptions=='' || $SupplierID=='' || $CategoryID==''|| $Active=='' || $Available=='' || $QuantityPerUnit==''|| $UnitPrice=='' || $MSRP=='' || $AvailableSize==''|| $AvailableColors=='' || $Size==''  || $Color=='' || $PicureID=='' || $Discount==''|| $UnitsInStock=='' || $UnitsOnOrder=='' || $Weight==''|| $Availability=='' || $Notes=='')
		{
			echo "please fill the empty field.";
		}
		else
		{
			$sql="call InsertProduct()";
			//$sql="insert into products values('".$ProductID."', '".$SKU."', '".$ProductName."', '".$ProductDescriptions."', '".$SupplierID."', '".$CategoryID."', '".$Active."', '".$Available."', '".$QuantityPerUnit."','".$UnitPrice."', '".$MSRP."', '".$AvailableSize."','".$AvailableColors."', '".$Size."', '".$Color."', '".$PicureID."', '".$Discount."', '".$UnitsInStock."', '".$UnitsOnOrder."', '".$Weight."', '".$Availability."', '".$Ranking."', '".$Reviews."', '".$Notes."')";
			$res=mysql_query($sql);
			if($res)
				{
					include 'admin.php';	
				}
				else
				{
					echo "There is some problem in inserting record";
				}
		}
}

?>