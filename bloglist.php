<?php


include_once'config/db_conn.php';

include 'includes/header.php'
?>
<h3><a href="hotel.php">Booking </a></h3> "
<?php

$sqlquery ="SELECT*FROM hotel;";

$data =mysqli_query($conn,$sqlquery );

foreach($data as $unitdata):?>
	<h5>
		<?php
		echo $unitdata['id'];
		?>
	</h5>
<h5>
 <?php
	echo $unitdata['name'];?>
</h5>
<h1>
 <?php
	echo $unitdata['address'];?>
</h1

<h3>
 <?php
	echo $unitdata['contract'];?>
</h3>

<h4>
	<?php
	echo $unitdata['email'];
	?>
</h4>

<h3>
	<?php
	echo $unitdata['room'];
	?>
</h3>

<h4>
	<?php
	echo $unitdata['date'];
	?>
</h4>

<h2>
	<?php
	echo $unitdata['days'];
	</h2>

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
