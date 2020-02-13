<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Example Content">
		<meta name =viewport content ="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<nav class="nav-header-main">
				<div class="header-login">
					<?php
						if (!isset($_SESSION['id'])) 
						{
				          echo '<form action="includes/login.inc.php" method="post">
				            <input type="text" name="mailuid" placeholder="E-mail/Username">
				            <input type="password" name="pwd" placeholder="Password">
				            <button type="submit" name="login-submit">Login</button>
				          </form>
				          <a href="signup.php" class="header-signup">Signup</a>';
				        }
				        else if (isset($_SESSION['id'])) 
				        {
				          echo '<form action="includes/logout.inc.php" method="post">
				            <button type="submit" name="login-submit">Logout</button>
				          </form>';
				        }

					?>
				</div>
			</nav>
		</header>
	</body>