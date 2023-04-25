<?php
include_once './getname.php';
?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <link rel="shortcut icon" href="icons/page-icons/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>DropShop | Regulamin</title>

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

                        <li class="nav-item">
                            <a class="nav-link" href="page_home.php"><img src="icons/page-icons/home-24px.png" alt=""/> Strona główna</a>
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

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="icons/page-icons/help-24px.png" alt=""/> Pomoc <span class="sr-only">(current)</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="page_contact.php">Kontakt</a>
                                <a class="dropdown-item" href="page_stat.php">Regulamin</a>
                            </div>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="flex-container">

            <div class="container">

                <div class="row align-items-center my-5">

                    <div id="flex-item0" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">REGULAMIN SKLEPU INTERNETOWEGO</h2>
                                <div id="block0" style="display: none">
                                    
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="flex-item1" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">I. Definicje</h2>
                                <div id="block1" style="display: none">

                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block1').style.display = 'block'; document.getElementById('flex-item1').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block1').style.display = 'none'; document.getElementById('flex-item1').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item2" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">II. Postanowienia ogólne</h2>
                                <div id="block2" style="display: none">

                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block2').style.display = 'block'; document.getElementById('flex-item2').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block2').style.display = 'none'; document.getElementById('flex-item2').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item3" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">III. Zasady korzystania ze sklepu internetowego</h2>
                                <div id="block3" style="display: none">
                                    

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block3').style.display = 'block'; document.getElementById('flex-item3').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block3').style.display = 'none'; document.getElementById('flex-item3').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item4" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">IV. Procedura zawarcia Umowy sprzedaży</h2>
                                <div id="block4" style="display: none">
                                    

                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block4').style.display = 'block'; document.getElementById('flex-item4').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block4').style.display = 'none'; document.getElementById('flex-item4').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item5" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">V. Dostawa</h2>
                                <div id="block5" style="display: none">
                                    

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block5').style.display = 'block'; document.getElementById('flex-item5').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block5').style.display = 'none'; document.getElementById('flex-item5').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item6" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">VI. Ceny i metody płatności</h2>
                                <div id="block6" style="display: none">
                                    

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block6').style.display = 'block'; document.getElementById('flex-item6').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block6').style.display = 'none'; document.getElementById('flex-item6').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item7" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">VII. Prawo odstąpienia od umowy</h2>
                                <div id="block7" style="display: none">
                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block7').style.display = 'block'; document.getElementById('flex-item7').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block7').style.display = 'none'; document.getElementById('flex-item7').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item8" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">VIII. Reklamacje dotyczące towarów</h2>
                                <div id="block8" style="display: none">

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block8').style.display = 'block'; document.getElementById('flex-item8').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block8').style.display = 'none'; document.getElementById('flex-item8').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item9" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">IX. Reklamacje w zakresie świadczenia usług drogą elektroniczną</h2>
                                <div id="block9" style="display: none">

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block9').style.display = 'block'; document.getElementById('flex-item9').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block9').style.display = 'none'; document.getElementById('flex-item9').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
                            </div>
                        </div>
                    </div>

                    <div id="flex-item10" class="flex-item">

                        <div class="all">
                            <div class="card-body">
                                <h2 class="card-title">X. Postanowienia końcowe</h2>
                                <div id="block10" style="display: none">
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block10').style.display = 'block'; document.getElementById('flex-item10').style.padding = '0 0 30% 0'"><img src="icons/page-icons/keyboard_arrow_down-24px.png" alt=""/>Rozwiń</button>
                                <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('block10').style.display = 'none'; document.getElementById('flex-item10').style.padding = '0 0 0 0'"><img src="icons/page-icons/keyboard_arrow_up-24px.png" alt=""/>Zwiń</button>
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
