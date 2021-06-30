<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="./app.js"></script>
</head>
<body>
	<div class="reg">
		<form action="regUser.php" method="POST">
			<input type="name" name="name" class="form-control form_reg" placeholder="username" required>
			<input type="email" name="email" class="form-control form_reg" placeholder="email" required>
			<input type="password" name="pass" class="form-control form_reg form_reg_pass" placeholder="password"><img class="form_reg_pass_view" src="./pass_view.png">
			<input type="password" class="form-control form_reg form_reg_pass_repeat" placeholder="password repeat">
			<input type="submit" class="btn btn-success reg_btn" value="Register" disabled="disabled">
			


		</form>
		<button class="btn btn-secondary reg_back_btn">Back</button>
	</div>
</body>
</html>


<?php?>