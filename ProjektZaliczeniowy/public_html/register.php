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

        <title>DropShop | Piłki</title>

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
<?php
$bd = mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


require_once("klasy/Baza.php");
if(isset($_SESSION['user_id'])){
    header('location:home.php');
    exit();
}?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Zarejestruj</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="register" name="submit" value="register"></input>
    </div>
  </form>
  <div class="reminder">
    <p>Posiadasz konto? <a href="./login.php">Zaloguj</a></p>
    <p><a href="#">Przypomnij hasło</a></p>
  </div>
  
</div>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $args = [
        'user' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/']
        ],
        'pass' => [
            'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ]
    ];

    $data = filter_input_array(INPUT_POST, $args);

    if($data['user'] !== false && $data['pass'] !== false) {
        $username = $data['user'];
        $password = $data['pass'];
        $bd = new mysqli("localhost", "root", "", "login");
        if($bd->connect_error){
            die("Connection failed: " . $bd->connect_error);
        }
        //$password = password_hash($password, PASSWORD_DEFAULT);
        if(dodajdoBD($bd, $username, $password)) {
            $user_id = $bd->insert_id;
            $_SESSION['user_id'] = $user_id;
            
            header('location:home.php');
        } else {
            //echo "Error" . $bd->error;
        }
        $bd->close();
    } else {
        echo 'zle dane';
    }
    }
function dodajdoBD($bd, $username, $password) {
$username = mysqli_real_escape_string($bd, $username);
$sql_check = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($bd, $sql_check);
if (mysqli_num_rows($result) > 0) {
    echo "Wybrany login istnieje";
    return false;
}
$password = mysqli_real_escape_string($bd, $password);
$hpassword = password_hash($password, PASSWORD_DEFAULT);
$name = $username;
echo $hpassword;
$sql = "INSERT INTO users (username, password, name) VALUES ('$username', '$hpassword', '$name')";
return mysqli_query($bd, $sql);
}
?>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    </body>

</html>