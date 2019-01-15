<?php
	include "header.php";
?>
<section id="page">
		<h1></h1>
		<?php 
			session_start();
			session_unset();
			session_destroy();
			header('location: formLogin.php?error=2');
		 ?>
</section>
<?php include "footer.php"; ?>