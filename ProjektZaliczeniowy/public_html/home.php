<?php
include_once './getname.php';
?>
<html lang="pl">

    <head>
        <link rel="shortcut icon" href="icons/page-icons/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DropShop</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link href="css/style1.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">DropShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="page_home.php"><img src="icons/page-icons/home-24px.png" alt=""/> Strona główna
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/PROJEKT%20ZALICZENIOWY/public_html/login.php"><img src="icons/page-icons/account_circle-24px.png" alt=""/><?php echo $nameacc ?></a>
                        </li>
                            <li class="nav-item">
                            <a class="nav-link cart" href="page_basket.php"><img src="icons/page-icons/shopping_basket-24px.png" alt=""/> Koszyk 
                               <?php if (isset($_SESSION['cart'])) : ?>
                                      <?php echo count($_SESSION['cart']);; ?>
                                    <?php endif; ?>
                            </a>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="icons/page-icons/help-24px.png" alt=""/> Pomoc
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="page_contact.php">Kontakt</a>
                                <a class="dropdown-item" href="page_stat.php">Regulamin</a>
                            </div>

                    </ul>
                </div>
            </div>
        </nav>
<?php 
$bd = mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


include('session.php'); 
require_once("klasy/Baza.php");

$result=mysqli_query($bd, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Zalogowano jako: <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="logout.php">Wyloguj się</a></p>
    <p><a href="changepass.php">Zmien haslo</a></p>
    <p><a href="deleteacc.php">Usun konto</a></p>
  </div>
</div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/basket.js"></script>

    </body>

</html>