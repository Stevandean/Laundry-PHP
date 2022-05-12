<?php
require_once "author/login_guard.php";
require_once "componen/navbar.php";
require_once "componen/bootstrap.php";

allow_page_access_exclusive(["Admin", "Kasir", "Owner"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php bootstrap_css(); ?>

	<title>Home</title>
</head>
<body style="background-color: rgb(248, 248, 255);">
	<?php navbar(); ?>

	<main class="container py-5">
		<div class="row">
			<div class="col-md-8">
				<h1 style="color: rgb(100, 149, 237);">Welcome <?= $_SESSION['nama_user']?></h1>
				<h1 style="color: rgb(100, 149, 237);">in Laundry Web</h1>
                <h4 style="style=color: rgb(100, 149, 237);text-align: left; margin-top: 20px;">Remember Our Vision</h4>
				<img src="../Laundry/image/homepage3.png" alt="home" style="position:absolute; width: 600px; height: 620px; margin-left: 750px; margin-top: -220px;">
			</div>
		</div>
	</main>

	<?php bootstrap_js(); ?>
</body>
</html>