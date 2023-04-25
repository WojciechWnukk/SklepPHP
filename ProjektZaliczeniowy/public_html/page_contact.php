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

        <title>DropShop | Kontakt</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>

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

        <div class="container">

            <div class="flex-item2">

                <div class="row align-items-center my-5">
                    <div class="col-lg-7">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" style="width: 900px; height: 400px" src="images/page-contact/siedziba.jpg" alt="siedziba1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="width: 900px; height: 400px" src="images/page-contact/siedziba2.jpg" alt="siedziba2">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" style="width: 900px; height: 400px" src="images/page-contact/siedziba3.jpg" alt="siedziba3">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5">

                        <div class="flex-item">
                            <div class="all">
                                <h1 class="font-weight-light">Informacje kontaktowe DropShop</h1>
                            </div>
                        </div>
                        <div class="flex-item2">
                            <div class="all">
                                Adres mailowy :<br />
                                DropShop@gmail.com<br />
                            </div>
                        </div>
                        <div class="flex-item2">
                            <div class="all">
                                Nr telefonu :<br />
                                123 456 789<br />
                            </div>
                        </div>
                        <div class="flex-item2">
                            <div class="all">
                                Siedziba firmy :<br />
                                Ul. Jana Sawy 157, 22-209 Lublin<br />
                            </div>
                        </div>
                        <div class="flex-item2">
                            <div class="all">

                                <h4>
                                    Masz jakieś pytanie? Skontaktuj się z nami! 
                                    Odpowiemy Ci natychmiastowo!  <br />
                                </h4>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="flex-item2">
                <div class="all">
                    <h5 id="kont">Formularz kontaktowy</h5>

                    <form action="mailto:DropShop@DroP.com" method = "post" onsubmit = "return pokazDaneZebrane();" >
                        Twój email : <br /> 
                        <input type="email" class="input-field" name="Email" id="email" placeholder="Twój.mail@email.com" required /> <br />
                        Temat : <br />
                        <input type="text" class="input-field" name="Temat" id="temat" placeholder="Tutaj napisz temat" title="Temat należy zapisać w jednym zdaniu lub za pomocą słowa klucz. Maksymalnie 100 znaków." required pattern="^([A-ZŁ][a-ząćęłńóśźż ]{1,100})$" /> <br />
                        Opis : <br />
                        <textarea class="input-field" rows="3" cols="20" maxlength="200" name = "Opis_problemu" id="opis" title="Tu wpisz opis, dokładne streszczenie problemu, możliwie jak najkrócej. Maksymalnie 200 znaków." required> </textarea> <br />
                        <input type="submit" class="btn btn-primary btn-sm" style="width: 20%; margin-left: 40%; margin-right: 40%; background: white; color: black; padding: 5px; border: 1px solid black;" value="Zgłoś problem"/>

                    </form>

                </div>
            </div>

        </div>

        <script>
            function pokazDaneZebrane()
            {
                //Funkcja zbiera dane wpisane w pola formularza i wyświetla okienko
                //typu confirm do zatwierdzenia przez użytkownika:
                var dane = "Następujące dane zostaną wysłane na adres kontaktowy firmy - DropShop@DropShop.com :\n\n";
                dane += "Email : " + document.getElementById('email').value + "\n";
                dane += "Temat : " + document.getElementById('temat').value + "\n";
                dane += "Opis problemu : " + document.getElementById('opis').value + "\n";
                if (window.confirm(dane))
                    return true;
                else
                    return false;
            }
        </script>

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright <img src="icons/page-icons/copyright-24px.png" alt=""/> DropShop 2022</p>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="js/basket.js"></script>

    </body>

</html>
