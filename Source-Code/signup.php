<?php
session_start();

include 'sql.php';



	
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $dateofbirth = $_POST['dateofbirth'];

    //echo '<br>' .$username. '-----' .$password. '<br>';
   //heck($email,$username,$password,$phonenumber,$dateofbirth);
	

$sql = "INSERT INTO login (username, password, email, phonenumber, dateofbirth) VALUES ('$username', '$password', '$email', '$phonenumber', '$dateofbirth')";
$result =mysqli_query($connect,$sql);




?>