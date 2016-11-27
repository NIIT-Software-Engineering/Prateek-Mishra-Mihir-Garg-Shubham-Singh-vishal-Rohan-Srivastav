<?php

session_start();

if (isset($_SESSION['username']))

{
	echo "Member: ".$_SESSION['username'];
}
else
{
	echo "Please login";
}

?>