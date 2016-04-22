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

   

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/portfolio-item.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dobro dosli - <?php echo $userRow['user_email']; ?></title>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

	<link rel="stylesheet" href="style.css" type="text/css" />
    

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
                        <a href="onama.php">O nama</a>
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

            <div class="col-md-8">
                <img class="img-responsive" src="http://www.asdubai.org/uploaded/About_ASD/Campus/ASD_Campus-2065.jpg" alt="">
            </div>

            <div class="col-md-4">
                <h3>Reč rektora:</h3>
                <p>Najkraće rečeno, nudimo više i bolje, pod mnogo boljim uslovima. Univerzitet Metropolitan time nastavlja svoju misiju obezbeđivanja najkvalitetnijeg obrazovanja, jer smo ubeđeni da samo tako možemo našim diplomiranim studentima omogućiti put do kvalitetnih i dobro plaćenih radnih mesta. Nije važno samo studirati, pa i imati diplomu. Mnogo je važnije studirati pravu stvar, na pravom mestu, na pravi način – da bi se došlo da pravog posla.
Pridružite nam se. Kod nas je student u centru pažnje!</p>
                <h3>Naši poznati studenti:</h3>
                <ul>
                    <li>Aleksandar Šapić</li>
                    <li>Novak Đoković</li>
                    <li>Mitar Mirić</li>
                    <li>Zmaj od Šipova</li>
                </ul>
            </div>

        </div>
        
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Naše Učionice</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Contemporary_Computer_Lab.jpg/1280px-Contemporary_Computer_Lab.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://cache1.asset-cache.net/gc/78617261-computers-in-a-row-gettyimages.jpg?v=1&c=IWSAsset&k=2&d=V7fygrA4tq3%2bAfyqSxi9UbD8C1OFr%2bv8dBwuaV5gR7fQa8hjsWmugnbUt2j3MjOu" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://cache2.asset-cache.net/gc/78747583-people-in-computer-lab-gettyimages.jpg?v=1&c=IWSAsset&k=2&d=%2bI7hBja7MAYVZZLNpQE7A2uQT9lX0%2bXqeBTuUiRgypj5fVbs5l65u1XXh%2bPjYO8W" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://cache1.asset-cache.net/gc/160832307-university-students-use-computer-gettyimages.jpg?v=1&c=IWSAsset&k=2&d=cJlaqjmQu9Oid2xgrfgTz9GR3JP1N%2fOXk2lbsX7GdqC3ZfzkixzSVHnbtfcxhhV9" alt="">
                </a>
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
