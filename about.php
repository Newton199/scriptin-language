<?php

include 'includes/header.php'
?>

<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>

<h3> This is the body section of web page and here lies the main  content.</h3>
<br>
<br>
<br>


<?php

if(!isset ($_COOKIE["$cookie_name"]))
{
	echo "Cookie name is not set";

}

else{
	echo "Cookie".$Cookie_name."is set.";
	 echo "and the value is ".$_COOKIE[$cookie_value];
}


if (!isset($_SESSION["userid"])){

	echo "<br> <h4> You are not currently authenticated</h4>";

}
else
{
	echo "<br> session is available and you are logged in as:".$_SESSION['user_id'];
}


?>




<br>
<br>
<br>
<br>
<?php
include 'includes/footer.php'
?>
