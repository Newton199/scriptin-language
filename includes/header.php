<?php

session_start();
?>




<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>



<a href="index.php">Home</a>&nbsp;

<a href="about.php">about Us</a>&nbsp;

<a href="bloglist.php">bloglist</a>&nbsp;

<a href="contract.php">Contract</a>&nbsp;


<?php

if(!isset($_SESSION['username'])){


?>
<a href="loginform.php">login</a>$nbsp;
<a href="registrationform.php">Register</a>$nbsp;

<?php
}

else{?>
	<a href="logout.php">logout</a>$nbsp;


<?php
echo "<h1>Hello".$_SESSION['username']. "welcome to our student management system</h1>";
}
?>

</head>


<body>

<?php

$cookie_name="username";
$cookie_value="As";

setcookie($cookie_name,$cookie_value,time()+(86400*30));

$_SESSIOn['user_id']="NewtonRajKaphle@kbc.edu.np";
?>

