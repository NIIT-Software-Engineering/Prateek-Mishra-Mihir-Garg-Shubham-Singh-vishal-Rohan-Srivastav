<?php
session_start();

include 'sql.php';

if(isset($_POST['submit'])) {

	$username = $_POST['username'];
    $password = $_POST['password'];

    //echo '<br>' .$username. '-----' .$password. '<br>';
    check($username,$password);
	}

	function check($username, $password) {
		$check = "SELECT * FROM login where username='$username'";
		$check_q = mysql_query($check);

		if(mysql_num_rows($check_q)==1)
		{
			login($username,$password);
		}
		else
		 {
			echo "incorrect username<br>";
		}
	}

   function login($username, $password) {
		$check = "SELECT * FROM login where username='$username' and password='$password'";
		$check_q = mysql_query($check);

		if(mysql_num_rows($check_q)==1)
		{
			//echo "correct username and password<br>";
			$_SESSION['username'] = $username;
			header('location: index2.php');
		}
		else
		 {
			echo "incorrect password<br>";
		}
	}


?>