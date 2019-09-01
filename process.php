
<?php  //Start the Session
session_start();
 require('config.php');

if (isset($_POST['user']) and isset($_POST['password'])){

$username = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$row = mysqli_fetch_array($result);
if($row['username']== $username && $row['password']==$password){
    echo "Login success";
    echo "Hai " . $username . "
";
echo " This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
}
else{
    echo "fail";
}

}

?>