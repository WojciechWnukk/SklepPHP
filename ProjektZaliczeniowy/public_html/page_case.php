<?php
include_once './getname.php';
if (isset($_GET['pro_id'])) {

  $proid = $_GET['pro_id'];
  if (!empty($_SESSION['cart'])) {
    $acol = array_column($_SESSION['cart'], 'pro_id');

    if (in_array($proid, $acol)) {
      $_SESSION['cart'][$proid]['qty'] += 1;
    } else {
      $item = [
        'pro_id' => $_GET['pro_id'],
        'qty' => 1
      ];

      $_SESSION['cart'][$proid] = $item;
    }
  } else {
    $item = [
      'pro_id' => $_GET['pro_id'],
      'qty' => 1
    ];

    $_SESSION['cart'][$proid] = $item;
  }
}
?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <link rel="shortcut icon" href="icons/page-icons/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DropShop | Etui</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link href="css/style1.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

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

        <div class="container">

            <div class="row">

                <div class="col-lg-3">

                    <h1 class="my-4">Etui</h1>
                    <div class="list-group">

                        <a href="page_swimmingpools.php" class="list-group-item">Baseny</a>
                        <a href="page_balls.php" class="list-group-item">Piłki</a>
                        <a href="page_case.php" class="list-group-item">Etui na smartfony</a>
                    </div>

                </div>

                <div class="col-lg-9">

                    <div class="row">

                        

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">

                                
                                    <div id="carouselExampleIndicators1" class="carousel slide my-4" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid product-image" style="height: 400px" src="images/products-page/case1_1.jpg" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" style="height: 400px" src="images/products-page/case1_2.jpg" alt="slide2">
                                            </div>
                                           
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title product-name"><a href="#">Case 1</a></h4>
                                        <h5 class="product-price">39,00 PLN</h5>
                                        <ul class="card-text">
                                            <li>Materiał: Plastik</li>
                                            <li>Certyfikat zabezpieczeń Tak</li>
                                            <li>Gwarancja 12 miesięcy</li>
                                            <li>Wymiary Dowolny</li>
                                            <li>Kod producenta: AC1-E21</li>
                                        </ul>
                                    </div>
                                <a href="page_case.php?pro_id=7" class="btn btn-success">Dodaj do koszyka <img src="icons/page-icons/local_grocery_store-24px.png" alt=""/></a>
                                

                            </div>
                        </div>

                        

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">

                                
                                    <div id="carouselExampleIndicators2" class="carousel slide my-4" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid product-image" style="height: 400px" src="images/products-page/case2_1.jpg" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" style="height: 400px" src="images/products-page/case2_2.jpg" alt="slide2">
                                            </div>
                                           
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <h4 class="card-title product-name"><a href="#">Case 2</a></h4>
                                        <h5 class="product-price">29,00 PLN</h5>
                                        <ul class="card-text">
                                            <li>Materiał: Plastik</li>
                                            <li>Certyfikat zabezpieczeń Tak</li>
                                            <li>Gwarancja 12 miesięcy</li>
                                            <li>Wymiary 6,5"</li>
                                            <li>Kod producenta: AC1-E21</li>
                                        </ul>
                                    </div>
                                <a href="page_case.php?pro_id=8" class="btn btn-success">Dodaj do koszyka <img src="icons/page-icons/local_grocery_store-24px.png" alt=""/></a>
                                

                            </div>
                        </div>

                       

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">

                                
                                    <div id="carouselExampleIndicators3" class="carousel slide my-4" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid product-image" style="height: 400px" src="images/products-page/case3_1.jpg" alt="slide1">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" style="height: 400px" src="images/products-page/case3_2.jpg" alt="slide2">
                                            </div>
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="card-body">
                                        <h4 class="card-title product-name"><a href="#">Case 3</a></h4>
                                        <h5 class="product-price">49,00 PLN</h5>
                                        <ul class="card-text">
                                            <li>Materiał: Plastik</li>
                                            <li>Certyfikat zabezpieczeń Tak</li>
                                            <li>Gwarancja 48 miesięcy</li>
                                            <li>Wymiary 5,5-7"</li>
                                            <li>Kod producenta: AC1-E21</li>
                                        </ul>
                                    </div>
                                <a href="page_case.php?pro_id=9" class="btn btn-success">Dodaj do koszyka <img src="icons/page-icons/local_grocery_store-24px.png" alt=""/></a>
                                

                            </div>
                        </div>

                        

                    </div>

                </div>

            </div>

        </div>

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright <img src="icons/page-icons/copyright-24px.png" alt=""/> DropShop 2022</p>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>

</html>