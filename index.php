<?php 
	include 'classes/userController.php';

	// create user
	if (isset($_POST['create_user']  )) {
	
		$user_name = $_POST['username'];

		$user = new KahootUser();

		$user->signUp($user_name);
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>InfoTech - Game Session</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Stylings -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div class="main">
		<div class="content">
			<div>
				<h2 class="title">InfoTech Game</h2>
			</div>
			<div class="formfield">
				<form action="/index.php" method="POST">
					<input type="text" id="username" name="username" placeholder="Enter your unique username" />
					<input class="btn" type="submit" name="create_user" value="Enter" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>