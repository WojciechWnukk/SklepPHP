        <?php
$bd = mysqli_connect("localhost","root","","login");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


session_start();
if(isset($_SESSION['user_id'])){
    $session_id=$_SESSION['user_id'];
    $result=mysqli_query($bd, "select * from users where user_id='$session_id'")or die('Error In Session');
    $row=mysqli_fetch_array($result);
    $nameacc=" " . $row['name'];
} else{
    $nameacc = " Zaloguj ";
}