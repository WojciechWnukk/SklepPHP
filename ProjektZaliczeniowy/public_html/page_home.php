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

        <title>DropShop | Strona główna</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

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
                            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
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

                    <h1 class="my-4">Nasze produkty</h1>
                    <div class="list-group">

                        <a href="page_swimmingpools.php" class="list-group-item">Baseny</a>
                        <a href="page_balls.php" class="list-group-item">Piłki</a>
                        <a href="page_case.php" class="list-group-item">Etui na smartfony</a>
                    </div>

                </div>
                <div class="col-lg-9">
                    
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" style="width: 900px; height: 500px" src="images/home-page/home-banner1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" style="width: 900px; height: 500px" src="images/home-page/home-banner2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" style="width: 900px; height: 500px" src="images/home-page/home-banner3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    
                    <div class="row">


                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">O nas</h2>
                                    <p class="card-text">
                                        DropShop to firma zajmująca się popularnym w aktualnych czasach dropshippingiem. W skrócie - nasza firma kupuje towar od najlepszych hurtowni
                                        w naszym kraju oraz poza granicami aby móc Ci go sprzedać po cenach o wiele niższych niż w popularnych sklepach, które znacznie zawyżają cene produktu.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://pl.wix.com/blog/artykul/co-to-jest-dropshipping-i-jak-z-niego-korzystac" class="btn btn-primary btn-sm">Więcej o dropshippingu</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">Szybka obsługa</h2>
                                    <p class="card-text">
                                        Cechuje nas długoletnia tradycja i dbałość o potrzeby klienta.
                                        Do wszystkich zamówień w kraju powyżej 200 PLN oferujemy wysyłkę GRATIS, niezależnie od wybranej formy płatności.
                                        Standardowo wszystkie zamówienia realizujemy w ciągu 48 godzin, wystarczy zrealizować zamówienie, a nasz oddział
                                        zadba o jak najszybszą możliwość dostawy zamówienia.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://www.dhl.com/pl-pl/home.html" class="btn btn-primary btn-sm">Nasi partnerzy</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2 class="card-title">Gwarancja najniższych cen</h2>
                                    <p class="card-text">
                                        Stale obserwujemy rynek, aby weryfikować ceny i pokazać klientom nieomylność naszych ekspertów.
                                        Jeśli zauważyłeś, że ceny w naszym sklepie są mocno zawyżone i masz wątpliwości co do niektórych produktów,
                                        zgłoś się za pomocą formularza kontaktowego, a my postaramy się pomóc jak najszybciej jest to możliwe.
                                        Co więcej, jeśli masz rację dostaniesz od nas bon w postaci -20% na wszystkie produkty.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="page_contact.php" class="btn btn-primary btn-sm">Zgłoś się do nas, nie czekaj !</a>
                                </div>
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
