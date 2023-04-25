<!DOCTYPE html>
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

        <title>DropShop | Koszyk</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link href="style3.css" rel="stylesheet" type="text/css"/>

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
  <table class="table my-3">
    <a href="emptycart.php" class="btn btn-sm btn-danger mt-2">Opróżnij koszyk</a>
    <thead>
      <tr class="text-center">
        <th>Nr.</th>
        <th>Nazwa produktu</th>
        <th>Ilość</th>
        <th colspan="2">Edytuj</th>
      </tr>
    </thead>

    <tbody>
      <?php
      if (isset($_SESSION['cart'])) :
        $i = 1;
        foreach ($_SESSION['cart'] as $cart) :
      ?>
          <tr class="text-center">
            <td> #<?php echo $i; ?> </td>
            <td><?= getProductName($cart['pro_id']) ?></td>
            <td>
              <form action="update.php" method="post">
                <input type="number" value="<?= $cart['qty']; ?>" name="qty" min="1">
                <input type="hidden" name="upid" value="<?= $cart['pro_id']; ?>">
            </td>
            <td>
              <input type="submit" name="update" value="Zmien" class="btn btn-sm btn-warning">
              </form>
            </td>
            <td><a class="btn btn-sm btn-danger" href="removecartitem.php?id=<?= $cart['pro_id']; ?>">Usuń</a></td>
          </tr>
      <?php
          $i++;
        endforeach;
      endif;
      ?>
    </tbody>
  </table>
</div>
        <?php
function getProductName($productId) {
  switch($productId){
      case 1:
          $productname = "Basen 1";
          break;
      case 2:
          $productname = "Basen 2";
          break;
      case 3:
          $productname = "Basen 3";
          break;
      case 4:
          $productname = "Piłka 1";
          break;
      case 5:
          $productname = "Piłka 2";
           break;
      case 6:
          $productname = "Piłka 3";
          break;
      case 7:
          $productname = "Etui 1";
          break;
      case 8:
          $productname = "Etui 2";
          break;
      case 9:
          $productname = "Etui 3";
          break;
      default :
          break;
  }
  return $productname;
}


?>

</body>

</html>

                    <div class="flex-item2">
                <div class="all">

                    <form action="addOrderToDB.php" method = "post"" >
                    <input type="submit" class="btn btn-primary btn-sm" style="width: 20%; margin-left: 40%; margin-right: 40%; background: white; color: black; padding: 5px; border: 1px solid black;" value="Kup teraz"/>

                    </form>

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
