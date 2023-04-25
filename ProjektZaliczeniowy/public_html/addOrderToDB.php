<?php
include './page_basket.php';
$basen_1=0;
$basen_2=0;
$basen_3=0;
$pilka_4=0;
$pilka_5=0;
$pilka_6=0;
$case_7=0;
$case_8=0;
$case_9=0;
if (isset($_SESSION['cart'])) :
foreach ($_SESSION['cart'] as $cart) :
switch($cart['pro_id']){
    case 1:
        $basen_1 = $cart['qty'];
        break;
    case 2:
        $basen_2 = $cart['qty'];
        break;
    case 3:
        $basen_3 = $cart['qty'];
        break;
    case 4:
        $pilka_4 = $cart['qty'];
        break;
    case 5:
        $pilka_5 = $cart['qty'];
        break;
    case 6:
        $pilka_6 = $cart['qty'];
        break;
    case 7:
        $case_7 = $cart['qty'];
        break;
    case 8:
        $case_8 = $cart['qty'];
        break;
    case 9:
        $case_9 = $cart['qty'];
        break;
}
        endforeach;
        endif;

if(isset($_SESSION['user_id'])){
    $session_id = $_SESSION['user_id'];
} else{
    $session_id=0;
}

addOrderToDB($basen_1,$basen_2,$basen_3,$pilka_4, $pilka_5, $pilka_6, $case_7, $case_8, $case_9, 'Nieoplacone', $session_id);
function addOrderToDB($basen_1, $basen_2, $basen_3, $pilka_1, $pilka_2, $pilka_3, $case_1, $case_2, $case_3, $status_zamowienia, $session_id) {

    $dbname = "Zamowienia";

    $conn = new mysqli("localhost","root","", $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO zamowienia (basen_1, basen_2, basen_3, pilka_1, pilka_2, pilka_3, case_1, case_2, case_3, status_zamowienia, id_uzytkownika)
    VALUES ($basen_1, $basen_2, $basen_3, $pilka_1, $pilka_2, $pilka_3, $case_1, $case_2, $case_3, '$status_zamowienia', $session_id)";

    if ($conn->query($sql) === TRUE) {
        ?><h3>Dziekujemy za zlozenie zamowienia</h3><?php
        //header('location:page_home.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
