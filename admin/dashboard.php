<?php

include'init.php';

ob_start();

session_start();


if(isset($_SESSION['email']) && isset($_SESSION['password'])){

	include 'includes/templates/header.php';
?>

<!--Start Header -->

<div class="header">

	<div class="inside-header">
		

	</div>
	

</div>

<!--End Header -->
	<?php



	include 'includes/templates/navbar.php';
	echo'</br>';


	include 'includes/templates/footer.php';

}








?>