
<?php 
session_start();
$bd = mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(!isset($_SESSION['user_id'])){
    header('location:login.php');
    exit();
}

    $user_id = $_SESSION['user_id'];
    $bd = new mysqli("localhost", "root", "", "login");
    if($bd->connect_error){
        die("Connection failed: " . $bd->connect_error);
    }
    $sql = "DELETE FROM users WHERE user_id='$user_id'";
    if(mysqli_query($bd, $sql)){
        session_destroy();
        
        header('location:register.php');
    } else {
        echo "Error deleting account: " . $bd->error;
    }
    $bd->close();

?>
