<?php


include_once'config/db_conn.php';

include 'includes/header.php'
?>
<h3><a href="addblog.php">create a blog</a></h3> "
<?php

$sqlquery ="SELECT*FROM blog;";

$data =mysqli_query($conn,$sqlquery );

foreach($data as $unitdata):?>
<h5>
 <?php
	echo $unitdata['id'];?>
</h5>
<h1>
 <?php
	echo $unitdata['title'];?>
</h1

<p>
 <?php
	echo $unitdata['content'];?>
</p>

<a href="#">Read More</a>

<?php endforeach ;?>

?>


?>


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
<br>
<br>
<br>
<br>
<br>
<?php
include 'includes/footer.php'
?>
