<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		form {

		}
	</style>
</head>
<body>
<div class="container pt-5">
<div class="w-50 m-auto border rounded border-dark p-5">
	<form action="<?php echo(base_url())?>Welcome/validateform" class="form px-5" method="POST">
		<h2 class="text-center">Welcome Home !</h2> 
		<p class="text-center">Create Account</p>
		<div class="firstName">
			<input type="text" name="first_name" class="form-control my-4" placeholder="FirstName" value="<?php echo set_value('first_name') ?>">
			<span class="text-danger"><?php echo(form_error("first_name")) ?></span>
		</div>
		<div class="lastName">
			<input type="text" name="last_name" class="form-control my-4" placeholder="LastName" value="<?php echo set_value('last_name') ?>">
			<span class="text-danger"><?php echo(form_error("last_name")) ?></span>
		</div>
		<div class="username">
			<input type="text" name="username" class="form-control my-4" placeholder="username" value="<?php echo set_value('username') ?>">
			<span class="text-danger"><?php echo(form_error("username")) ?></span>
		</div>
		<div class="email">
			<input type="text" name="email" class="form-control my-4" placeholder="email" value="<?php echo set_value('email') ?>">
			<span class="text-danger"><?php echo(form_error("email")) ?></span>
		</div>
		<div class="password">
			<input type="password" name="password" class="form-control my-4" placeholder="password" value="<?php echo set_value('password') ?>">
			<span class="text-danger"><?php echo(form_error("password")) ?></span>
		</div>
		<div class="confirmPassword">
			<input type="password" name="confirmPassword" class="form-control my-4" placeholder="Confirm Password" value="<?php echo set_value('confirmPassword') ?>">
			<span class="text-danger"><?php echo(form_error("confirmPassword")) ?></span>
		</div>
		<div class="submit">
			<input type="submit" class="btn btn-primary btn-block" value="Sign up">
		</div>
	</form>
	</div>
</div>
</body>
</html>