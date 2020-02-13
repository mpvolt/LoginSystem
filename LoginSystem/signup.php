<?php 
	require "header.php";
 ?>

 	<main>
 		<div class = "wrapper-main">
 			<section class = "section-default">
 				<h1>Signup</h1>
 				<?php
	 				if (isset($_GET['error'])) {
	 					if ($_GET['error'] == 'emptyfields') {
	 					  	echo '<p class = signuperror>Fill in all fields!</p>';
	 					}
	 					elseif ($_GET['error'] == 'invaliduidemail') {
	 					 	echo '<p class = signuperror>Invalid Username and Email!</p>';
	 					}
	 					elseif ($_GET['error'] == 'usertaken') {
	 					 	echo '<p class = signuperror>Username is already taken</p>';
	 					}
	 					elseif ($_GET['error'] == 'invaliduid') {
	 					 	echo '<p class = signuperror>Invalid Username!</p>';
	 					}
	 					elseif ($_GET['error'] == 'invalidmail') {
	 					 	echo '<p class = signuperror>Invalid Email!</p>';
	 					}
	 					elseif ($_GET['error'] == 'passwordcheck') {
	 					 	echo '<p class = signuperror>Invalid Password!</p>';
	 					}    
	 				} 
	 				elseif (isset($_GET["signup"])) {
	 					if ($_GET['signup'] == 'success') {
	 				 		echo '<p class = signupsuccess>Signup Successful!</p>';
	 					}
	 				}
 				?>

 				<form class="form-signup" action = "includes/signup.inc.php" method = "post">
 					<?php
		            // Here we check if the user already tried submitting data.

		            // We check username.
		            if (!empty($_GET["uid"])) {
		              echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
		            }
		            else {
		              echo '<input type="text" name="uid" placeholder="Username">';
		            }

		            // We check e-mail.
		            if (!empty($_GET["mail"])) {
		              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
		            }
		            else {
		              echo '<input type="text" name="mail" placeholder="E-mail">';
		            }
		            ?>

 					<input type="password" name="pwd" placeholder="password">
 					<input type="password" name="pwd-repeat" placeholder="Repeat Password">
 					<button type="submit" name="signup-submit">Submit</button>
 				</form>
 			</section>
 		</div>
 	</main>

<?php  
	require "footer.php";
?>