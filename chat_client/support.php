<?include("config.php");include("login1.php");?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Hub | Registration / Login</title>
    
      <script src="//code.jquery.com/jquery-latest.js"></script>
	  <script src="chat.js"></script>
      <link href="chat.css" rel="stylesheet"/>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/modern-business.css" rel="stylesheet">

    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
               <a class="navbar-brand" href="../index.php"><font color="#5D5959">Product</font><font color="#56ABB4"> Hub</font></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../admin.html"><font color="#56ABB4">Admin Panel</font></a>
                    </li>
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
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">client</li>
                </ol>
                <ol class="breadcrumb">
                    <li class="active"><font color="#56ABB4">client chat window</font></li>
                </ol>
            </div>
        </div>

          <div id="content" style="margin-top:50px;height:75%;">
           <center>
           <div class="chat">
            <div class="users">
             <?include("users.php");?>
            </div>
            <div class="chatbox">
            </a>
             <?
             if(isset($_SESSION['user'])){
              include("chatbox.php");
             }else{
              $display_case=true;
              include("login1.php");
             }
             ?>
            </div>
           </div>
           </center>
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

    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>