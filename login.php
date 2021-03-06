<?php
require_once "componen/bootstrap.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php bootstrap_css(); ?>

	<title>Login</title>
</head>

<body style="background-color: rgb(248, 248, 255);">
	<div class="d-flex flex-column" style="height: 100vh;">

		<main class="flex-grow-1 container-fluid" style="margin-left: -60px;">
			<div class="row h-100">
				<div class="col-md-8 d-none d-md-block">
					<div class="d-flex justify-content-center align-items-center h-100">
                        <img src="../Laundry/image/login.png" alt="cuci" style="position:absolute; width: 530px; height: 450px; margin-left: 30px; margin-top: -10px;">
					</div>
				</div>
				<div class="col-md border-none d-flex justify-content-center">
					<form action="author/auth.php" method="POST" class="align-self-center w-75">

						<h1 style="color: rgb(100, 149, 237); font-size: 80px; font-weight: 800;">Chief</h1>
                        <h1 style="color: rgb(100, 149, 237); font-size: 80px; font-weight: 800; margin-top: -30px;">Laundry</h1>

						<div class="mb-3">
							<label for="username-input" class="form-label" style="color: gray; margin-top: 15px;">Username</label>
							<input type="text" class="form-control" id="username-input" name="username" style="margin-bottom: -10px;">
						</div>
						<div class="mb-3">
							<label for="password-input" class="form-label" style="color: gray;">Password</label>
							<input type="password" class="form-control" id="password-input" name="password">
						</div>
						<button type="submit" class="btn btn-primary" style="background-color: rgb(100, 149, 237); border: rgb(0, 170, 255);">Submit</button>
					</form>
				</div>
			</div>
		</main>
	</div>

	<?php bootstrap_js(); ?>
</body>

</html>