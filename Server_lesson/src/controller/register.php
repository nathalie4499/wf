<?php
includde_once __DIR__.'/init.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $username = $_POST['username'] ?? null;
    $password_1 = $_POST['password_1'] ?? null;
    $password_2 = $_POST['password_2'] ?? null;
    
    echo 'we did put something' . "<br/>";
    $usernameSuccess = (is_string($username) && strlen($username) > 2);
    $passwordSuccess = ($password_1 === $password_2 && strlen($password_1) > 7);
    
    if($usernameSuccess && $passwordSuccess) {
        echo 'Store data';
        return;
    } else {
    
        echo 'If validation fails' . "<br/>";
    }
    
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Register here</title>
	</head>
	<body>
		<form method="POST">
		<?php if (!($usernameSuccess ?? true)) {?>
		<div>
		<p> You have an error into your username</p>
		</div>
		<?php }?>
			<label for="username">Your username :</label>
			<input type="text" name="username" value="<?php echo htmlentities($username ?? ""); ?>" />
			<br/>
				<?php if (!($passwordSuccess ?? true)) {?>
		<div>
		<p> You have an error into your password</p>
		</div>
		<?php } ?>	
			
			<label for="password_1">Your password :</label>
			<input type="password" name="password_1" />
			<br/>
			
			<label for="password_2">Retype your password :</label>
			<input type="password" name="password_2"/>
			<br/>
			
			<button type="submit">Send</button>
		</form>
	</body>
</html>