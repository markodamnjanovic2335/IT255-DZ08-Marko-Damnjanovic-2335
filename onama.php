<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['userSession']))
{
	header("Location: index.php");
}

$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$MySQLi_CON->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>O nama</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/portfolio-item.css" rel="stylesheet">

    

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
                <a class="navbar-brand" href="index.html">Univerzitet VV</a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">O nama</a>
                    </li>
                    <li>
                        <a href="#">Smerovi</a>
                    </li>
					<li>
                        <a href="#">Profesori</a>
                    </li>
                    <li>
                        <a href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
			<div id="navbar" class="navbar-collapse collapse">
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['user_name']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Izloguj se</a></li>
          </ul>
        </div>
            
        </div>
       
    </nav>

    
    <div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <h1 align="center" style="color:blue;"  class="page-header">Univerzitet Vuk Vasić
                   
                </h1>
            </div>
        </div>
        
       
        
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">O nama</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <p> O nama nema puno govora</p>
            </div>

            

        </div>
        

        <hr>

        
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Jovana Stričić,Boro Mijović Jacob David i Marko Damnjanović UM</p>
                </div>
            </div>
         
        </footer>

    </div>
    

    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
